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
 * @method static Query province_id($prefix=null)
 * @method static Query primary_key($prefix=null)
 */
class DistrictEntity extends Entity
{    
    /**
    * const - fields
    */
    const id = 'district.id';
    const code = 'district.code';
    const name = 'district.name';
    const type = 'district.type';
    const location = 'district.location';
    const province_id = 'district.province_id';
    const primary_key = 'district.id';
    const table = '_district';
    const table_alias = 'district';
    /**
     * Schema
     */
     protected $schema = ['id','code','name','type','location','province_id'];
    /**
     * List of not nullable fields
     */
     protected $notNullAble = ['id','name','province_id'];
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
    * @var \int(10) unsigned $province_id
    */
    public $province_id;
    
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