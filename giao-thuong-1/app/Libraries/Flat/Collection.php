<?php

namespace App\Libraries\Flat;

use App\Libraries\stdClass;

/**
 * Class Collection
 * @package App\Libraries\Flat
 */
class Collection
{
    /**
     * @var array $data
     */
    private $items = [];
    /**
     * @var array $itemKeys
     */
    private $itemKeys = [];
    /**
     * @var string $dataType
     */
    private $itemType;

    /**
     * Collection constructor.
     * @param Model|string $model
     * @param array $items
     */
    public function __construct($model, array $items = [])
    {
        if ($model instanceof Model) {
            $this->itemType = $model->getClass();
//            $this->model = $model;
        }
        else if (is_string($model)) {
            $this->itemType = $model;
        }

        if (!empty($items)) {
            $this->addRange($items);
        }
    }

    /**
     * Add item
     * @param Model $item
     * @return void
     */
    public function add(Model $item)
    {
        if(!$this->exists($item))
        {
            $this->items[] = $item;
            $this->itemKeys[] = $item->entity->getId();
        }
    }

    /**
     * Add range of items
     * @param array $items
     * @return void
     */
    public function addRange(array $items)
    {
        foreach ($items as $item)
        {
            if(! $item instanceof Model)
            {
                $itemData = $item;
                $item = new $this->itemType();
                $item->entity->fill($itemData);
            }
            $this->add($item);
        }
    }

    /**
     * Loop collection
     * @param Callable $callback
     * @return void
     */
    public function each($callback)
    {
        if(is_callable($callback))
        {
            foreach($this->items as $item)
            {
                call_user_func_array($callback, [$item]);
            }
        }
    }

    /**
     * Find item by id
     * @param int $id
     * @return Model|null
     */
    public function findById($id)
    {
        if(in_array($id, $this->itemKeys))
        {
            $filter = $this->filter(function(Model $item) use($id){
                return $id == $item->entity->getId();
            });
            return array_shift($filter);
        }
        return null;
    }

    /**
     * Find item via callback
     * @param Callable $callback
     * @return Model|null
     */
    public function find($callback)
    {
        $filter = $this->filter($callback);
        return array_shift($filter);
    }

    /**
     * Filter collection
     * @param Callable $callback
     * @return array
     */
    public function filter($callback)
    {
        $filter = [];
        if(is_callable($callback))
        {
            $filter = array_filter($this->items, function($item) use ($callback){
                return call_user_func_array($callback, [$item]);
            });
        }

        return $filter;
    }

    /**
     * Get all value of a property
     * @param $property
     * @return array
     */
    public function pluck($property)
    {
        $propertyValues = [];
        $this->each(function(Model $item) use(&$propertyValues, $property){
            if($item->entity->hasProperty($property))
            {
                $propertyValues[] = $item->entity->{$property};
            }
        });

        return $propertyValues;
    }

    /**
     * Get total of items
     * @return int
     */
    public function count()
    {
        return count($this->items);
    }

    /**
     * Check if item has already existed
     * @param Model $item
     * @return bool
     */
    public function exists(Model $item)
    {
        return $this->isValidItemType($item) && in_array($item->entity->getId(), $this->itemKeys);
    }

    /**
     * Get index of item
     * @param Model $item
     * @return int|null
     */
    public function indexOf(Model $item)
    {
        if(!$this->isValidItemType($item))
        {
            return null;
        }

        /** @var Model $_item */
        foreach ($this->items as $key => $_item)
        {
            if($item->entity->getId() == $_item->entity->getId())
            {
                return $key;
            }
        }

        return null;
    }

    /**
     * Remove item
     * @param $item
     * @return void
     */
    public function remove(Model $item)
    {
        if($this->isValidItemType($item))
        {
            $indexOfItem = $this->indexOf($item);
            if(!is_null($indexOfItem))
            {
                array_splice($this->items, $indexOfItem, 1);
            }
        }
    }

    /**
     * Clear collection
     * @return void
     */
    public function clear()
    {
        $this->items = [];
        $this->itemKeys = [];
    }

    /**
     * Get first element
     * @return mixed
     */
    public function first() {
        return $this->items[0];
    }

    /**
     * Get last element
     * @return array
     */
    public function last() {
        return array_slice($this->items, -1, 1);
    }

    /**
     * Check if collection has any of items
     * @return bool
     */
    public function any() {
        return count($this->items) > 0;
    }

    /**
     * Get item type
     * @return string
     */
    public function getItemType() {
        return $this->itemType;
    }

    /**
     * To array of output
     * @param string|array|stdClass $outputType
     * @param \Closure|null $callback
     * @return array
     */
    public function toOutput($outputType, \Closure $callback = null)
    {
        $output = [];
        /** @var Model $item */
        foreach ($this->items as $item)
        {
            $ret = $item->toOutput($outputType);
            if (is_callable($callback)) {
                @call_user_func_array($callback, [&$ret]);
            }
            $output[] = $ret;
        }

        return $output;
    }

    /**
     * To array
     * @return array
     */
    public function toArray()
    {
        $output = [];
        foreach ($this->items as $item)
        {
            $output[] = $item->toArray();
        }

        return $output;
    }

    /**
     * To json string
     * @return false|string
     */
    public function toJson()
    {
        return json_encode($this->toArray(), JSON_UNESCAPED_UNICODE);
    }

    /**
     * Check if is valid item
     * @param Model $item
     * @return bool
     */
    private function isValidItemType(Model $item)
    {
        return $item->getClass() == $this->itemType;
    }
}
