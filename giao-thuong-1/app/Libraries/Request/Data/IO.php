<?php

namespace App\Libraries\Request\Data;

use App\Libraries\Format\Str;
use App\Libraries\stdClass;

/**
 * Class IO
 * @package App\Libraries\Request\Data
 */
class IO extends stdClass
{
    /**
     * Presents as primary key
     * @var int $id
     */
    public $id;

    /**
     * @var string $uid
     */
    public $uid;

    /**
     * @var array $resultMap
     */
    protected $resultMap = [];

    /**
     * @var array $required
     */
    protected $required = [];

    /**
     * Get key
     * @return int
     */
    public function getKey()
    {
        return $this->id;
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
                $k = lcfirst($k);
                if(!$this->hasProperty($k))
                {
                    if(!$resultMap && $dataSet instanceof stdClass)
                    {
                        $resultMap = $this->getReverseShortMapping($this->resultMap);
                    }

                    if(isset($resultMap[$k]) && $this->hasProperty($resultMap[$k]))
                    {
                        $this->{$resultMap[$k]} = Str::trim($v);
                    }

                    continue;
                }

                if (!$this->{$k} instanceof stdClass)
                {
                    if($this->{$k} instanceof Collection && is_array($v))
                    {
                        $this->{$k}->addRange($v);
                        continue;
                    }

                    $this->{$k} = Str::trim($v);
                }
                else{
                    $this->{$k}->fill($v);
                }
            }
        }
        return $this;
    }

    /**
     * Get result mapping
     * @return array
     */
    public function getResultMap()
    {
        return $this->resultMap;
    }

    /**
     * Add mapping
     * @param $key
     * @param $value
     */
    public function addMapping($key, $value)
    {
        $this->resultMap[$key] = $value;
    }

    /**
     * Get short mapping
     * @param array $resultMap
     * @return array
     */
    public function getReverseShortMapping(array $resultMap)
    {
        $shortMapping = [];
        foreach ($resultMap as $mf => $mv)
        {
            preg_match('/(\s+as\s+|\.)(.*)?$/i', $mv, $matched);
            if($matched)
            {
                $shortMapping[$matched[2]] = $mf;
            }
        }

        return $shortMapping;
    }

    /**
     * Get raw data
     * @return array
     */
    public function getReverseMappingData() {
        $reverseMapping = $this->getReverseShortMapping($this->getResultMap());
        $data = [];
        foreach ($reverseMapping as $k => $v) {
            if (isset($this->{$v})) {
                $data[$k] = $this->{$v};
            }
        }
        return $data;
    }

    /**
     * Check requirement
     * @throws \Exception
     */
    public function checkRequirement() {
        foreach ($this->required as $field) {
            if (!isset($this->{$field})) {
                throw new \Exception('Missing param: '. $field,3);
            }
            if (empty($this->{$field}) && !is_numeric($this->{$field})) {
                throw new \Exception('Field can not be empty: '. $field,2);
            }
        }

        foreach ($this->getPublicProperties() as $property){
            if ($this->{$property->name} instanceof IO || $this->{$property->name} instanceof Collection){
                $this->{$property->name}->checkRequirement();
            }
        }
    }
}
