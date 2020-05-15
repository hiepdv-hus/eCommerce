<?php

namespace App\Libraries\Flat\Entities;

use App\Libraries\Flat\Entity;
use App\Libraries\Flat\Query\Query;

/**
 * @method static Query id($prefix=null)
 * @method static Query code($prefix=null)
 * @method static Query name($prefix=null)
 * @method static Query type($prefix=null)
 * @method static Query order_by($prefix=null)
 * @method static Query primary_key($prefix=null)
 */
class ProvinceEntity extends Entity
{    
    /**
    * const - fields
    */
    const id = 'province.id';
    const code = 'province.code';
    const name = 'province.name';
    const type = 'province.type';
    const order_by = 'province.order_by';
    const primary_key = 'province.id';
    const table = '_province';
    const table_alias = 'province';
    /**
     * Schema
     */
     protected $schema = ['id','code','name','type','order_by'];
    /**
     * List of not nullable fields
     */
     protected $notNullAble = ['id','name'];
    /**
     * List of fields withd efault value
     */
     protected $default = [];

    /**
    * @var \int(10) unsigned $id
    */
    public $id;
    /**
    * @var \varchar(50) $code
    */
    public $code;
    /**
    * @var \varchar(150) $name
    */
    public $name;
    /**
    * @var \varchar(50) $type
    */
    public $type;
    /**
    * @var \int(11) $order_by
    */
    public $order_by;
    
    /**
     * Get id
     * @return int
     */
    public function getPrimaryKey()
    {
        return 'id';
    }
    
    /**
     * Get id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}