<?php

namespace App\Libraries\Flat\Database;

use App\Libraries\Flat\Entities\SystemUserEntity;
use App\Libraries\Request\Data\Input;
use App\Libraries\Request\Data\IO;
use App\Libraries\Flat\Entity;
use App\Libraries\Format\Str;
use App\Libraries\stdClass;
use Exception;
use Illuminate\Support\Facades\DB;
use ReflectionClass;
use ReflectionMethod;

/**
 * Class DbContext
 * @package App\Libraries\Flat\Database
 */
class DbContext
{
    /**
     * @var DbContext $instance
     */
    private static $instance;

    /**
     * @var Entity $entity
     */
    protected $entity;
    /**
     * @var array|Input|string $outputType
     */
    protected $outputType;

    protected $select = [];
    protected $join = [];
    protected $where = [];
    protected $order = [];
    protected $groupBy = [];

    protected $offset = 0;
    protected $segment = 10;
    protected $noLimit = false;

    /**
     * DbTable constructor.
     * @param null $entity
     */
    public function __construct($entity = null)
    {
        $this->entity = $entity;
    }

    /**
     * Select query
     * @param $select
     * @return $this
     * @throws Exception
     */
    public function select($select)
    {
        if(is_array($select))
        {
            foreach($select as $s)
            {
                $this->select($s);
            }
        }
        else{
            $this->select[] = $this->validQueryElement($select);
        }

        return $this;
    }

    /**
     * Join query
     * @param string $joinQuery
     * @return $this
     */
    public function join($joinQuery)
    {
        $joinQuery = $this->validQueryElement($joinQuery);
        $this->join[] = "INNER JOIN $joinQuery";
        return $this;
    }

    /**
     * Left join query
     * @param $leftJoinQuery
     * @return $this
     */
    public function joinLeft($leftJoinQuery)
    {
        $leftJoinQuery = $this->validQueryElement($leftJoinQuery);
        $this->join[] = "LEFT JOIN $leftJoinQuery";
        return $this;
    }

    /**
     * Right join query
     * @param $rightJoinQuery
     * @return $this
     */
    public function joinRight($rightJoinQuery)
    {
        $rightJoinQuery = $this->validQueryElement($rightJoinQuery);
        $this->join[] = "RIGHT JOIN $rightJoinQuery";
        return $this;
    }

    /**
     * Where - condition query
     * @param $where
     * @return $this
     * @throws Exception
     */
    public function where($where)
    {
        $args = func_get_args();
        $where = $this->validQueryElement($args[0]);
        if($where)
        {
            array_shift($args);

            if($args)
            {
                $where = $this->quote($where, $args);
            }

            $this->where[] = "AND ($where)";
        }

        return $this;
    }

    /**
     * Where or - condition query
     * @param $where
     * @return $this
     * @throws Exception
     */
    public function whereOr($where)
    {
        $args = func_get_args();
        $where = $this->validQueryElement($args[0]);
        if($where)
        {
            array_shift($args);

            if($args)
            {
                $where = $this->quote($where, $args);
            }

            $this->where[] = "OR ($where)";
        }

        return $this;
    }

    /**
     * Order by ascending query
     * @param $order
     * @return $this
     * @throws Exception
     */
    public function orderByAscending($order)
    {
        $order = $this->validQueryElement($order);
        if($order)
        {
            $this->order[] = "$order ASC";
        }

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
        $order = $this->validQueryElement($order);
        if($order)
        {
            $this->order[] = "$order DESC";
        }

        return $this;
    }

    /**
     * Group by query
     * @param $groupBy
     * @return $this
     */
    public function groupBy($groupBy)
    {
        $groupBy = $this->validQueryElement($groupBy);
        if($groupBy)
        {
            $this->groupBy[] = $groupBy;
        }

        return $this;
    }

    /**
     * Set offset
     * @param $offset
     * @return $this
     */
    public function skip($offset)
    {
        $offset = intval($offset);
        $offset = $offset < 0 ? 0 : $offset;
        $this->offset = $offset;

        return $this;
    }

    /**
     * Set segment
     * @param $segment
     * @return $this
     */
    public function take($segment)
    {
        $segment = intval($segment);
        $segment = $segment <= 0 ? $this->segment : $segment;
        $this->segment = $segment;

        return $this;
    }

    /**
     * Set flag to get all records - without limit
     * @return DbContext
     */
    public function noLimit()
    {
        $this->noLimit = true;
        return $this;
    }

    /**
     * Get first from result set
     * @return Entity
     * @throws Exception
     */
    public function first()
    {
        $this->skip(0)->take(1);
        $ret = $this->finalResult(DB::selectOne($this->getSelectQuery()));

        // Clear query
        $this->clearQuery();

        return $ret;
    }

    /**
     * Get single field from result set
     * @return mixed
     * @throws Exception
     */
    public function firstOne()
    {
        $this->skip(0)->take(1);
        $ret = DB::selectOne($this->getSelectQuery());

        // Clear query
        $this->clearQuery();

        return is_array($ret) ? array_shift($ret) : $ret;
    }

    /**
     * Get array of records from result set
     * @return array
     */
    public function toList()
    {
        $list = [];
        $ret = DB::select($this->getSelectQuery());

        foreach ($ret as $result)
        {
            $list[] = $this->finalResult($result);
        }

        // Clear query
        $this->clearQuery();

        return $list;
    }

    /**
     * Insert new entity
     * @return int|bool
     * @throws Exception
     */
    public function insert()
    {
        $data = $this->entity->prepareDataInsert();
        $fields = implode(',', array_keys($data));
        $values = implode(',', $data);

        $insertQuery = /** @lang text */
            "INSERT INTO {$this->entity->getTable()} ($fields) VALUES ($values)";

        if(DB::insert($insertQuery))
        {
            return DB::connection()->getPdo()->lastInsertId();
        }

        return false;
    }

    /**
     * Update entity
     * @return bool
     */
    public function update()
    {
        $data = $this->entity->prepareDataUpdate();
        $values = [];

        foreach ($data as $field => $value)
        {
            $values[] = $field.'='.$value;
        }

        if (empty($values)) {
            return true;
        }

        $values = implode(',', $values);
        $updateQuery = /** @lang text */
            "UPDATE {$this->entity->getTable()} SET $values WHERE {$this->entity->getPrimaryKey()}={$this->entity->getId()}";
        $updated = DB::update($updateQuery);

        return (bool)$updated;
    }

    /**
     * Delete entity
     * @return bool
     */
    public function delete()
    {
        $deleteQuery = /** @lang text */
            "DELETE FROM {$this->entity->getTable()} WHERE {$this->entity->getPrimaryKey()}={$this->entity->getId()}";
        $deleted = DB::delete($deleteQuery);

        return (bool)$deleted;
    }

    /**
     * Soft delete entity
     * @param string $softDeletedField
     * @return bool
     */
    public function softDelete(string $softDeletedField)
    {
        $this->entity->{$softDeletedField} = 1;
        $deleted = $this->update();

        return (bool)$deleted;
    }

    /**
     * Get single value
     * @param $query
     * @return mixed
     */
    public function fetchOne($query)
    {
        $query = $this->validQueryElement($query);
        $ret = array_filter((array)DB::selectOne($query));
        return array_shift($ret);
    }

    /**
     * Get select query
     * @return string
     */
    public function getSelectQuery()
    {
        $varbinarySet = $this->entity->getVarbinarySet();
        $selectByOutput = [];

        if (!empty($this->outputType))
        {
            $resultMap = [];

            if(is_array($this->outputType))
            {
                $resultMap = array_filter($this->outputType);
            }
            elseif (is_string($this->outputType) && (!Str::isEmpty($this->outputType)
                    && class_exists($this->outputType)))
            {
                $output = new $this->outputType();
                if($output instanceof stdClass)
                {
                    $resultMap = array_filter($output->resultMap);
                }
            }
            elseif ($this->outputType instanceof stdClass)
            {
                $resultMap = array_filter($this->outputType->resultMap);
            }

            foreach($resultMap as $outputProperty => $field)
            {
                $field = "$field"; // Always get field as a string
                $fieldShortName = preg_replace('/^.*?\.(.*)$/', '$1', $field);
                if (in_array($field, $varbinarySet)) {
                    $selectByOutput[$fieldShortName] =
                        "AES_DECRYPT($field, '{$this->getDbKeydecode()}') as `$outputProperty`";
                }
                else {
                    $selectByOutput[$field] = "$field as `$outputProperty`";
                }
            }
        }

        if(empty($selectByOutput) && empty($this->select))
        {
            $this->select = array_merge($this->entity->getAllFields(), $this->select);
            $decryptSet = array_intersect($this->select, $varbinarySet);
            if($decryptSet)
            {
                foreach ($decryptSet as $k => $v)
                {
                    $this->select[$k] = "AES_DECRYPT($v, '{$this->getDbKeydecode()}') as `$k`";
                }
            }
        }
        else {
            $this->select = array_merge((array)$selectByOutput, $this->select);
        }


        $select = trim(implode(',', array_filter($this->select)), ', ');
        $join = trim(implode(' ', array_filter($this->join)));
        $where = trim(implode(' ', array_filter($this->where)));
        $order = '';
        $groupBy = '';
        $limit = !$this->noLimit ? "LIMIT {$this->offset}, {$this->segment}" : "";


        if(!empty($this->order)) {
            $order = 'ORDER BY ' . trim(implode(',', array_filter($this->order)));
        }

        if(!empty($this->groupBy))
        {
            $groupBy = 'GROUP BY ' . trim(implode(',', array_filter($this->groupBy)), ', ');
        }

        if(empty($select))
        {
            $select = "{$this->entity->getTableAlias()}.*";
        }

        $query = trim(/** @lang text */
            "SELECT {$select} FROM {$this->entity->getTable()} {$this->entity->getTableAlias()} {$join} WHERE 1 {$where} {$groupBy} {$order} {$limit}");

        return $query;
    }

    /**
     * Get select query
     * @return string
     */
    public function getSelectCountQuery()
    {
        $where = trim(implode(' ', $this->where));

        $query = trim(/** @lang text */
            "SELECT COUNT(1) FROM {$this->entity->getTable()} {$this->entity->getTableAlias()} WHERE 1 {$where}");

        return $query;
    }

    /**
     * Quote string
     * @param $string
     * @param array $values
     * @return string
     */
    public function quote($string, $values = [])
    {
        if($values)
        {
            preg_match_all('/(%s|%d){1}/', $string, $matched);
            if($matched)
            {
                foreach ($matched as $key => $valueType)
                {
                    if($valueType == '%s')
                    {
                        $args[$key] = DB::connection()->getPdo()->quote($values[$key]);
                    }
                    else{
                        if(is_string($values[$key]))
                        {
                            $values[$key] = preg_replace('/[^\d]+/', '', $values[$key]);
                        }
                        $args[$key] = $values[$key];
                    }
                }

                $string = vsprintf($string, $values);
            }
        }
        else{
            $string = DB::connection()->getPdo()->quote($string);
        }

        return $string;
    }

    /**
     * Validate query element
     * @param $queryElement
     * @return string
     */
    private function validQueryElement($queryElement)
    {
        $queryElement = (string)$queryElement;
        if(Str::isEmpty($queryElement)) {
            return null;
        }

        return trim($queryElement);
    }

    /**
     * Set output type
     * @param $outputType
     * @return $this
     */
    public function setOutputType($outputType)
    {
        $this->outputType = $outputType;
        return $this;
    }

    /**
     * Get value with output type
     * @param $result
     * @return mixed
     */
    private function finalResult($result)
    {
        if(!empty($this->outputType))
        {
            if(is_array($this->outputType))
            {
                $ret = [];
                foreach ($this->outputType as $k => $v)
                {
                    if(property_exists($result, $k))
                    {
                        $ret[$k] = $result->{$k};
                    }
                }
                return $ret;
            }
            else if((is_string($this->outputType) && class_exists($this->outputType)) || $this->outputType instanceof IO)
            {
                return new $this->outputType($result);
            }
        }
        else if($this->entity instanceof Entity){
            return new $this->entity((array)$result);
        }

        return $result;
    }

    /**
     * Clear query
     */
    protected function clearQuery()
    {
        $this->select = [];
        $this->where = [];
        $this->join = [];
        $this->order = [];
        $this->groupBy = [];
        $this->outputType = null;
        $this->noLimit = false;
    }

    /**
     * Get protected methods
     * @return ReflectionMethod[]
     */
    private function getProtectedMethods()
    {
        $methods = [];
        try
        {
            $ref = new ReflectionClass($this);
            foreach($ref->getMethods(ReflectionMethod::IS_PROTECTED) as $method)
            {
                $methods[] = $method->name;
            }
        }
        catch (Exception $exception){ }

        return $methods;
    }

    protected function getDbKeyDecode()
    {
        return env('DB_ENCRYPTION_KEY');
    }

    /**
     * Get db key decode
     * @return string
     */
    public static function getKeyDecode()
    {
        return self::instance()->getDbKeyDecode();
    }

    /**
     * Get instance
     * @return DbContext
     */
    public static function instance()
    {
        if(!self::$instance)
        {
            self::$instance = new static();
        }

        return self::$instance;
    }
}
