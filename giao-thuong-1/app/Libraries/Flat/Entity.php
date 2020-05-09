<?php

namespace App\Libraries\Flat;

use App\Libraries\Flat\Database\DbContext;
use App\Libraries\Flat\Query\EntityDriver;
use App\Libraries\Format\Str;
use App\Libraries\Flat\Query\Query;
use App\Libraries\Request\Data\IO;
use App\Libraries\stdClass;
use Exception;

/**
 * Class Entity
 * @package App\Libraries\Flat
 */
abstract class Entity extends stdClass// implements EntityInterface
{
    /**
     * List of instance
     * @var array $instances
     */
    private static $instances = [];

    /**
     * @var EntityDriver $driver
     */
    protected $driver;

    /**
     * Set of fields with type of varbinary
     * @var array $varbinarySet
     */
    protected $varbinarySet = [];

    /**
     * [field_type => field_name]
     * @var array $schema
     */
    protected $schema = [];

    /**
     * @var array $notNullAble
     */
    protected $notNullAble = [];

    /**
     * @var array $default
     */
    protected $default = [];

    /**
     * Origin data
     * @var array $originData
     */
    protected $originData = [];

    /**
     * Get primary key
     * @return string
     */
    abstract public function getPrimaryKey();

    /**
     * Get id
     * @return int
     */
    abstract public function getId();

    /**
     * Get table name
     * @return mixed
     */
    public function getTable()
    {
        return constant($this->getClass().'::table');
    }

    /**
     * Get default table alias
     * @return mixed
     */
    public function getTableAlias()
    {
        return constant($this->getClass().'::table_alias');
    }

    /**
     * Get set of fields with type of varbinary
     * @return array
     */
    public function getVarbinarySet()
    {
        if(empty($this->varbinarySet) && defined($this->getClass().'::varbinary_set_of_fields'))
        {
            $this->varbinarySet = array_filter(explode(',', constant($this->getClass().'::varbinary_set_of_fields')));
        }

        return $this->varbinarySet;
    }

    /**
     * Get all fields to select
     * @return array
     */
    public function getAllFields()
    {
        return $this->schema;
    }

    /**
     * Get all fields with prefix to select
     * @return array
     */
    public function getAllFieldsWithPrefix()
    {
        return array_map(function($i){
            return $this->getTableAlias().'.'.$i;
        }, $this->schema);
    }

    /**
     * Get affected fields
     * @return array
     */
    public function getAffectedFields()
    {
        $affectedFields = [];
        foreach ($this->originData as $field => $value)
        {
            if($value != $this->{$field})
            {
                $affectedFields[] = $field;
            }
        }

        return $affectedFields;
    }

    /**
     * Fill data
     * @param array|stdClass $dataSet
     * @return stdClass
     */
    public function fill($dataSet)
    {
        if(is_array($dataSet) || is_object($dataSet))
        {
            $resultMap = [];
            foreach ($dataSet as $k => $v)
            {
                if(!$this->hasProperty($k))
                {
                    if(!$resultMap && $dataSet instanceof IO)
                    {
                        $resultMap = $dataSet->getReverseShortMapping($dataSet->getResultMap());
                    }

                    if(in_array($k, $resultMap))
                    {
                        $k = array_search($k, $resultMap);
                        if($this->hasProperty($k))
                        {
                            $this->{$k} = Str::trim($v);
                        }
                    }

                    continue;
                }

                if(is_scalar($v) || is_null($v))
                {
                    $this->{$k} = $v;
                }
            }

            if(!is_array($this->originData) || empty($this->originData))
            {
                $this->originData = $this->toArray();
            }
        }
        return $this;
    }

    /**
     * To array
     * @return array
     */
    public function toArray()
    {
        $ret = [];
        foreach($this->schema as $field)
        {
            $ret[$field] = $this->{$field};
        }
        return $ret;
    }

    /**
     * To output
     * @param null $outputType
     * @return array
     * @throws Exception
     */
    public function toOutput($outputType = null)
    {
        $output = [];

        if(is_null($outputType))
        {
            $output = $this->toArray();
        }
        elseif(is_string($outputType))
        {
            if(!Str::isEmpty($outputType))
            {
                $outputClass = trim($outputType);
                if(!class_exists($outputClass))
                {
                    throw new Exception("OutputClass::$outputClass not found.");
                }

                $outputClass = new $outputClass();
                if(!$outputClass instanceof stdClass)
                {
                    throw new Exception('OutputType required to be an instance of stdClass.');
                }

                $outputClass->fill($this);
                $output = $outputClass->toArray();
            }
        }
        elseif (is_array($outputType))
        {
            $stdClass = new IO();
            $reverseShortMapping = $stdClass->getReverseShortMapping($outputType);
            foreach($reverseShortMapping as $k => $v)
            {
                $output[$v] = $this->{$k};
            }
        }
        elseif (is_callable($outputType))
        {
            $output = call_user_func_array($outputType, [$this]);
        }

        return $output;
    }

    /**
     * Prepare data for insert, update sql transaction
     * @return array
     */
    public function prepareData()
    {
        $data = $this->toArray();
//        $varbinarySetKeys = $this->getVarbinarySet();
//        foreach($data as $key => &$v)
//        {
//            if(in_array($this->getTableAlias().'.'.$key, $varbinarySetKeys))
//            {
//                $v = "AES_ENCRYPT('$v', '".DbTable::getKeyDecode()."')";
//            }
//        }
//        unset($data[$this->getPrimaryKey()]);

        return $data;
    }

    /**
     * Prepare data for insert
     * @return array
     * @throws Exception
     */
    public function prepareDataInsert()
    {
        $fields = $this->getAllFields();
        $values = $this->toArray();
        $data = [];

        foreach ($fields as $type => $field)
        {
            if($field == $this->getPrimaryKey())
            {
                continue;
            }

            if($values[$field] !== null)
            {
                if(is_string($values[$field]))
                {
                    $values[$field] = DbContext::instance()->quote($values[$field]);
                }
                $data[$field] = $values[$field];
            }
            else{
                if(in_array($field, $this->notNullAble))
                {
                    if(!in_array($field, array_keys($this->default)))
                    {
                        throw new Exception('Missing required value of ['.$field.']');
                    }
                    $data[$field] = $this->default[$field];
                }
            }
        }

        return $data;
    }

    /**
     * Prepare data for update
     * @return array
     */
    public function prepareDataUpdate()
    {
        $fields = $this->getAffectedFields();
        $values = $this->toArray();
        $data = [];

        foreach ($fields as $type => $field)
        {
            if($values[$field] !== null)
            {
                if(!is_numeric($values[$field]))
                {
                    $values[$field] = DbContext::instance()->quote($values[$field]);
                }
                $data[$field] = $values[$field];
            }
        }

        return $data;
    }

    /**
     * Get query driver
     * @return EntityDriver
     */
    public function getDriver()
    {
        if(!$this->driver)
        {
            $this->driver = new EntityDriver($this);
        }

        return $this->driver;
    }

    /**
     * Get instance
     * @return Entity
     */
    public static function instance()
    {
        $static = get_called_class();
        if(!self::$instances[$static])
        {
            self::$instances[$static] = new static();
        }

        return self::$instances[$static];
    }

    /**
     * Set table to query
     * @param null $alias
     * @return Query
     */
    public static function table($alias = null)
    {
        //$class = get_called_class();
        $table = constant(static::class.'::table');
        $queryDriver = new Query(static::class);

        if(!Str::isEmpty($alias))
        {
            $alias = trim($alias);
        }
        else{
            $alias = constant(static::class.'::table_alias');
        }

        $queryDriver->getField()->setName($table.' '.$alias);
        return $queryDriver;
    }

    /**
     * Magic call static
     * @param $name
     * @param $arguments
     * @return Query
     */
    public static function __callStatic($name, $arguments)
    {
        //$class = get_called_class();
        if(defined(static::class.'::'.$name))
        {
            $queryDriver = new Query(static::class);
            $fieldName = constant(static::class.'::'.$name);
            if(!empty($arguments[0]))
            {
                $fieldName = trim((string)$arguments[0]) .'.'.$name;
            }
            $queryDriver->getField()->setName($fieldName);
            return $queryDriver;
        }

        return null;
    }

}
