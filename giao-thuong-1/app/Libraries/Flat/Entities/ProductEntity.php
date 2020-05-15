<?php

namespace App\Libraries\Flat\Entities;

use App\Libraries\Flat\Entity;
use App\Libraries\Flat\Query\Query;

/**
 * @method static Query id($prefix=null)
 * @method static Query name($prefix=null)
 * @method static Query description($prefix=null)
 * @method static Query media_id($prefix=null)
 * @method static Query price($prefix=null)
 * @method static Query special_price($prefix=null)
 * @method static Query package_id($prefix=null)
 * @method static Query is_active($prefix=null)
 * @method static Query user_create_id($prefix=null)
 * @method static Query user_update_id($prefix=null)
 * @method static Query is_deleted($prefix=null)
 * @method static Query created_time($prefix=null)
 * @method static Query modified_time($prefix=null)
 * @method static Query primary_key($prefix=null)
 */
class ProductEntity extends Entity
{    
    /**
    * const - fields
    */
    const id = 'product.id';
    const name = 'product.name';
    const description = 'product.description';
    const media_id = 'product.media_id';
    const price = 'product.price';
    const special_price = 'product.special_price';
    const package_id = 'product.package_id';
    const is_active = 'product.is_active';
    const user_create_id = 'product.user_create_id';
    const user_update_id = 'product.user_update_id';
    const is_deleted = 'product.is_deleted';
    const created_time = 'product.created_time';
    const modified_time = 'product.modified_time';
    const primary_key = 'product.id';
    const table = '_product';
    const table_alias = 'product';
    /**
     * Schema
     */
     protected $schema = ['id','name','description','media_id','price','special_price','package_id','is_active','user_create_id','user_update_id','is_deleted','created_time','modified_time'];
    /**
     * List of not nullable fields
     */
     protected $notNullAble = ['id','name','price','special_price','package_id'];
    /**
     * List of fields withd efault value
     */
     protected $default = [];

    /**
    * @var \int(10) unsigned $id
    */
    public $id;
    /**
    * @var \varchar(150) $name
    */
    public $name;
    /**
    * @var \text $description
    */
    public $description;
    /**
    * @var \int(11) $media_id
    */
    public $media_id;
    /**
    * @var \double(15,2) $price
    */
    public $price;
    /**
    * @var \double(15,2) $special_price
    */
    public $special_price;
    /**
    * @var \int(10) unsigned $package_id
    */
    public $package_id;
    /**
    * @var \tinyint(1) unsigned $is_active
    */
    public $is_active;
    /**
    * @var \int(10) unsigned $user_create_id
    */
    public $user_create_id;
    /**
    * @var \int(10) unsigned $user_update_id
    */
    public $user_update_id;
    /**
    * @var \tinyint(1) unsigned $is_deleted
    */
    public $is_deleted;
    /**
    * @var \datetime $created_time
    */
    public $created_time;
    /**
    * @var \datetime $modified_time
    */
    public $modified_time;
    
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