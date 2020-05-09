<?php

namespace App\Libraries\Request\Data;

use App\Libraries\stdClass;

/**
 * Class Collection
 * @package App\Libraries\Request\Data
 */
class Collection extends \Illuminate\Support\Collection
{
    /**
     * @var array $data
     */
    protected $items = [];
    /**
     * @var string $dataType
     */
    private $itemType;

    /**
     * Collection constructor.
     * @param string $itemType
     * @param array $items
     */
    public function __construct($itemType, array $items = [])
    {
        parent::__construct();
        $this->itemType = $itemType;
        $this->addRange($items);
    }

    /**
     * Add item
     * @param IO $item
     * @return void
     */
    public function add(IO $item)
    {
        $this->items[] = $item;
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
            if( !($item instanceof IO) )
            {
                $itemData = $item;
                /**
                 * @var stdClass $item
                 */
                $item = new $this->itemType();
                $item->fill($itemData);
            }
            $this->add($item);
        }
    }

    /**
     * Find item via callback
     * @param Callable $callback
     * @return stdClass|null
     */
    public function find($callback)
    {
        return $this->filter($callback)->first();
    }

    /**
     * Find item by id
     * @param $id
     * @return stdClass|null|
     */
    public function findById($id)
    {
        return $this->find(function(IO $item) use($id){
            return $item->id == $id;
        });
    }

    /**
     * Clear collection
     * @return void
     */
    public function clear()
    {
        $this->items = [];
    }

    /**
     * Get item type
     * @return string
     */
    public function getItemType()
    {
        return $this->itemType;
    }

    /**
     * Check if is valid item
     * @param stdClass $item
     * @return bool
     */
    private function isValidItemType(stdClass $item)
    {
        return $item->getClass() == $this->itemType;
    }

    /**
     * Check requirement of data
     */
    public function checkRequirement(){
        foreach ($this->items as $item){
            if (method_exists($item,'checkRequirement')){
                $item->checkRequirement();
            }
        }
    }
}
