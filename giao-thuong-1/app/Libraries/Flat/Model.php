<?php

namespace App\Libraries\Flat;

use App\Libraries\Flat\Database\DbContext;
use App\Libraries\Flat\Query\Query;
use App\Libraries\Format\Str;
use App\Libraries\Request\Data\Collection as DataCollection;
use App\Libraries\Request\Data\IO;
use App\Libraries\stdClass;
use Exception;
use Illuminate\Contracts\Support\Arrayable;
use ReflectionClass;

/**
 * Class Model
 * @package App\Libraries\Flat
 */

/**
 * @property Entity $entity
 * @property Collection $collection
 * @property int $recordsTotal
 */

abstract class Model
{
    /**
     * @var DbContext $dbContext
     */
    private $dbContext;

    /**
     * @var Entity $entity
     */
    protected $entity;

    /**
     * @var Collection $collection
     */
    protected $collection;

    /**
     * @var string $outputType
     */
    protected $outputType;

    /**
     * @var int $recordsTotal
     */
    protected $recordsTotal;

    /**
     * @var array $protectedFields
     */
    protected $protectedFields = [];

    /**
     * Field represents for soft delete
     * @var string $softDeleted
     */
    protected $softDelete = '';

    /**
     * Field represents for created time
     * @var string $createTime
     */
    protected $createTime = '';

    /**
     * Field represents for modified time
     * @var string $modifyTime
     */
    protected $modifyTime = '';

    /**
     * Flag for loading items with trash
     * @var bool $loadWithTrash
     */
    private $loadWithTrash = false;

    /**
     * @var array $classMap
     */
    protected $classMap = [];

    /**
     * Model constructor.
     */
    public function __construct()
    {
        // Required setting entity
        $this->setEntity();
        // Class mapping
        foreach ($this->classMap as $property => $class)
        {
            if(is_string($class) && class_exists($class))
            {
                $this->{$property} = new $class();
            }
            else if(is_array($class) && !empty($class) && class_exists($class[0]))
            {
                $params = $class;
                $class = array_shift($params);
                try {
                    $ref = new ReflectionClass($class);
                    $this->{$property} = $ref->newInstanceArgs($params);
                } catch (\ReflectionException $e) {
                }
            }
        }
    }

    /**
     * Set entity | Required
     * @return mixed
     */
    protected abstract function setEntity();

    /**
     * Get class name
     * @return string
     */
    public function getClass()
    {
        return get_class($this);
    }

    /**
     * Check if property exists
     * @param string $property
     * @return bool
     */
    public function hasProperty($property)
    {
        return property_exists($this, $property);
    }

    /**
     * Get DbContext instance
     * @return DbContext
     */
    public function getDbContext()
    {
        if(!$this->dbContext)
        {
            $this->dbContext = new DbContext($this->entity);
        }
        return $this->dbContext;
    }

    /**
     * Get collection
     * @return Collection
     */
    public function getCollection()
    {
        if(!$this->collection)
        {
            $this->collection = new Collection($this);
        }
        return $this->collection;
    }

    /**
     * Check if item
     * @return bool
     */
    public function exists()
    {
        return intval($this->entity->getId()) > 0;
    }

    /**
     * Load by id
     * @param $id
     * @return $this
     * @throws Exception
     */
    public function loadById($id)
    {
        $id = intval($id);
        if(!is_numeric($id))
        {
            return $this;
        }

        return $this->load("{$this->getTableAlias()}.{$this->getPrimaryKey()} = $id");
    }

    /**
     * Load item
     * @param $condition
     * @return mixed
     * @throws Exception
     */
    public function load($condition = null)
    {
        $ret = $this->withoutTrash()
            ->getDbContext()
            ->where($condition)
            ->first();

        if($ret)
        {
            $this->entity->fill($ret);
            return $this;
        }

        return $ret;
    }

    /**
     * Load with result in a specific type
     * @param $outputType
     * @param null $condition
     * @return mixed
     * @throws Exception
     */
    public function loadWithTypeOf($outputType, $condition = null)
    {
        return $this->setOutputType($outputType)->load($condition);
    }

    /**
     * Load field
     * @param $field
     * @param null $condition
     * @return mixed
     * @throws Exception
     */
    public function loadField($field, $condition = null)
    {
        return $this->withoutTrash()->getDbContext()->where($condition)->select($field)->firstOne();
    }

    /**
     * Load list
     * @param int $offset
     * @param int $segment
     * @param bool $all
     * @return array
     * @throws Exception
     */
    public function loadArray($offset = 0, $segment = 10, $all = false)
    {
        try {
            $this->recordsTotal = $this->withoutTrash()
                                    ->getDbContext()
                                    ->fetchOne($this->getDbContext()->getSelectCountQuery());
            $ret = [];
            !$all or $segment = $this->recordsTotal;

            if ($this->recordsTotal > 0) {
                $ret = $this->getDbContext()
                    ->skip($this->getOffset($offset))
                    ->take($this->getSegment($segment))
                    ->toList();
            }

        }
        catch (Exception $exception)
        {
            throw new Exception($exception->getMessage()."\n".$this->getDbContext()->getSelectQuery());
        }

        return $ret;
    }

    /**
     * Load array all
     * @return array
     * @throws Exception
     */
    public function loadArrayAll() {
        return $this->loadArray(0, 0, true);
    }

    /**
     * Load collection
     * @param int $offset
     * @param int $segment
     * @param bool $all
     * @return Collection
     * @throws Exception
     */
    public function loadCollection($offset = 0, $segment = 10, $all = false)
    {
        $ret = $this->loadArray($offset, $segment, $all);
        $this->getCollection()->addRange($ret);

        return $this->collection;
    }

    /**
     * Load collection
     * @return Collection
     * @throws Exception
     */
    public function loadCollectionAll()
    {
        $ret = $this->loadArray(0, 0, true);
        $this->getCollection()->addRange($ret);

        return $this->collection;
    }

    /**
     * Set query filter
     * @param $condition
     * @return $this
     * @throws Exception
     */
    public function filter($condition)
    {
        $this->getDbContext()->where($condition);
        return $this;
    }

    /**
     * Get right offset
     * @param $offset
     * @return int
     */
    public function getOffset($offset)
    {
        $offset = intval($offset);
        $offset = $offset < 0 ? 0 : $offset;
        return $offset;
    }

    /**
     * Get right segment
     * @param $segment
     * @return int
     */
    public function getSegment($segment)
    {
        $segment = intval($segment);
        $segment = $segment < 0 ? 0 : $segment;
        $segment = $segment > 100 ? 100 : $segment;
        return $segment;
    }

    /**
     * Insert new entity
     * @return int|bool
     * @throws Exception
     */
    public function insert()
    {
        // Set default deleted flag
        !$this->softDelete or $this->entity->{$this->softDelete} = 0;
        // Set created time
        !$this->createTime or $this->entity->{$this->createTime} = Str::timeNow();

        return $this->getDbContext()->insert();
    }

    /**
     * Update entity
     * @return bool
     */
    public function update()
    {
        if(!$this->exists())
        {
            return false;
        }

        // Set modified time
        !$this->modifyTime or $this->entity->{$this->modifyTime} = Str::timeNow();

        return $this->getDbContext()->update();
    }

    /**
     * Delete entity
     * @return bool
     */
    public function delete()
    {
        if(!$this->exists())
        {
            return false;
        }

        return $this->getDbContext()->delete();
    }

    /**
     * Soft delete entity
     * @return bool
     */
    public function softDelete()
    {
        if(!$this->exists())
        {
            return false;
        }

        // Set modified time
        !$this->modifyTime or $this->entity->{$this->modifyTime} = Str::timeNow();

        return $this->getDbContext()->softDelete($this->softDelete);
    }

    /**
     * Get table name
     * @return string
     */
    public function getTable()
    {
        return $this->entity->getTable();
    }

    /**
     * Get table alias
     * @return string
     */
    public function getTableAlias()
    {
        return $this->entity->getTableAlias();
    }

    /**
     * Get primary key
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->entity->getPrimaryKey();
    }

    /**
     * Get id
     * @return int
     */
    public function getId() {
        return $this->entity->getId();
    }

    /**
     * Return entity as an array
     * @return array
     */
    public function toArray()
    {
        return $this->entity->toArray();
    }

    /**
     * To output
     * @param string|IO $outputType
     * @return mixed
     */
    public function toOutput($outputType)
    {
        /** @var stdClass $output */
        $output = $outputType;
        !is_string($output) or $output = new $output();

        if(! $output instanceof IO)
        {
            return [];
        }

        $output->fill($this->entity);
        $outputArray = $output->toArray();

        foreach($output as $property => &$value)
        {
            if(!empty($this->{$property}))
            {
                if($this->{$property} instanceof Model)
                {
                    $value = $this->{$property}->toOutput($output->{$property});
//                    if($value instanceof DataCollection)
//                    {
//                        $outputArray[$property] = $this->{$property}->collection->toOutput($value->getItemType());
//                    }
//                    else{
//                        $outputArray[$property] = $this->{$property}->toOutput($output->{$property});
//                    }
                }
                else if ($this->{$property} instanceof Collection) {
                    if ($value instanceof DataCollection) {
                        $value = $this->{$property}->toOutput($value->getItemType());
                    }
                    else {
                        $value = $this->{$property}->toArray();
                    }
                }
            }
        }

        return $output;
    }

    /**
     * Set output type
     * @param array|stdClass|string $outputType
     * @return $this
     */
    public function setOutputType($outputType)
    {
        $this->getDbContext()->setOutputType($outputType);
        return $this;
    }

    /**
     * Set condition to select with trash
     * @return $this
     */
    public function withTrash()
    {
        $this->loadWithTrash = true;
        return $this;
    }

    /**
     * Set condition to select without trash
     * @return $this
     * @throws Exception
     */
    public function withoutTrash()
    {
        if($this->softDelete && !$this->loadWithTrash)
        {
            $queryBuilder = new Query($this->entity->getClass());
            $queryBuilder->getField()->setName($this->getTableAlias().'.'.$this->softDelete);
            $this->getDbContext()->where($queryBuilder->notEqual(1));
        }

        // Reset flag
        $this->loadWithTrash = false;

        return $this;
    }

    /**
     * With static helper
     * @param $condition
     * @return $this
     * @throws Exception
     */
    public static function with($condition)
    {
        $instance = self::instance();
        $instance->getDbContext()->where($condition);

        return $instance;
    }

    /**
     * Select static helper
     * @param $select
     * @return $this
     * @throws Exception
     */
    public static function select($select)
    {
        $instance = self::instance();
        $instance->getDbContext()->select($select);

        return $instance;
    }

    /**
     * Order by ascending query
     * @param $order
     * @return $this
     * @throws Exception
     */
    public function orderByAscending($order)
    {
        $this->getDbContext()->orderByAscending($order);
        return $this;
    }

    /**
     * Order by descending query
     * @param $order
     * @return $this
     * @throws Exception
     */
    public function orderByDescending($order)
    {
        $this->getDbContext()->orderByDescending($order);
        return $this;
    }

    /**
     * Group by query
     * @param $groupBy
     * @return $this
     */
    public function groupBy($groupBy)
    {
        $this->getDbContext()->groupBy($groupBy);
        return $this;
    }

    /**
     * Get records total
     * @return int
     */
    public function getRecordsTotal()
    {
        return $this->recordsTotal;
    }

    /**
     * Get instance
     * @return $this
     */
    public static function instance()
    {
        return new static();
    }

    /**
     * Magic get
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        switch ($name)
        {
            case 'entity':
                return $this->entity;
            case 'collection':
                if(!$this->collection)
                {
                    $this->collection = new Collection($this);
                }
                return $this->collection;
            case 'recordsTotal':
                return $this->recordsTotal;
            default:
                return null;
        }
    }

    /**
     * Magic call
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        if($this->hasProperty($name))
        {
            if(is_object($this->{$name}))
            {
                return $this->{$name};
            }
            else if(is_string($this->{$name}) && class_exists($this->{$name}))
            {
                $this->{$name} = new $this->{$name}();
                return $this->{$name};
            }
        }
        return null;
    }
}
