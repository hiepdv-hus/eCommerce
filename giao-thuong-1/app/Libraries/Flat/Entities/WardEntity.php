<?php

namespace App\Libraries\Flat\Entities;

use App\Libraries\Flat\Entity;
use App\Libraries\Flat\Query\Query;

/**
 * @method static Query id($prefix=null)
 * @method static Query code($prefix=null)
 * @method static Query name($prefix=null)
 * @method static Query type($prefix=null)
 * @method static Query location($prefix=null)
 * @method static Query district_id($prefix=null)
 * @method static Query primary_key($prefix=null)
 */
class WardEntity extends Entity
{    
    /**
    * const - fields
    */
    const id = 'ward.id';
    const code = 'ward.code';
    const name = 'ward.name';
    const type = 'ward.type';
    const location = 'ward.location';
    const district_id = 'ward.district_id';
    const primary_key = 'ward.id';
    const table = '_ward';
    const table_alias = 'ward';
    /**
     * Schema
     */
     protected $schema = ['id','code','name','type','location','district_id'];
    /**
     * List of not nullable fields
     */
     protected $notNullAble = ['id','name','district_id'];
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
    * @var \varchar(255) $name
    */
    public $name;
    /**
    * @var \varchar(50) $type
    */
    public $type;
    /**
    * @var \varchar(255) $location
    */
    public $location;
    /**
    * @var \int(10) unsigned $district_id
    */
    public $district_id;
    
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