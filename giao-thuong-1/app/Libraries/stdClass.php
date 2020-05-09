<?php

namespace App\Libraries;

use App\Libraries\Flat\Entities\SystemUserEntity;
use App\Libraries\Format\Str;
use App\Libraries\Request\Data\Collection;
use Illuminate\Contracts\Support\Arrayable;
use ReflectionClass;
use ReflectionProperty;

/**
 * @property array $resultMap
 */
class stdClass implements Arrayable
{
    /**
     * @var array $classMap
     */
    protected $classMap = [];

    /**
     * stdClass constructor.
     * @param mixed $data
     */
    public function __construct($data = [])
    {
        foreach ($this->classMap as $property => $class)
        {
            if (!$this->hasProperty($property)) {
                continue;
            }

            if (is_array($class)) {
                $params = $class;
                $class = array_shift($params);
                $ref = new ReflectionClass($class);
                $this->{$property} = $ref->newInstanceArgs($params);
            }
            else if (is_string($class)) {
                $this->{$property} = new $class();
            }
        }
        empty($data) or $this->fill($data);
    }

    /**
     * Clone object
     * @return stdClass
     * @throws \ReflectionException
     */
    public function clone()
    {
        return new static($this);
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
            foreach ($dataSet as $k => $v)
            {
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
     * Convert instance object to array
     * @return array
     */
    public function toArray()
    {
        $arr = [];
        foreach ($this->getPublicProperties() as $property)
        {
            if($this->{$property->name} instanceof Arrayable)
            {
                $arr[$property->name] = $this->{$property->name}->toArray();
            }
            else{
                $arr[$property->name] = $this->{$property->name};
                if (is_array($arr[$property->name]))
                {
                    $arr[$property->name] = array_map(function($item){
                        if($item instanceof stdClass){
                            return $item->toArray();
                        }
                        return $item;
                    }, $arr[$property->name]);
                }
            }
        }

        return $arr;
    }

    /**
     * @return string
     */
    public function toJson()
    {
        return json_encode($this->toArray(), JSON_UNESCAPED_UNICODE);
    }

    /**
     * Get class name
     * @return string
     */
    public function getClass()
    {
        return get_class($this);
    }

    /**
     * Magic get
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        if($this->hasProperty($name))
        {
            return $this->{$name};
        }
        return null;
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
     * Get all public properties
     * @return array|ReflectionProperty[]
     */
    protected function getPublicProperties()
    {
        try{
            $reflect = new ReflectionClass($this);
            $props   = $reflect->getProperties(ReflectionProperty::IS_PUBLIC);
        }
        catch (\ReflectionException $ex){
            $props = [];
        }

        return $props;
    }
}
