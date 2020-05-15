<?php

namespace App\Libraries\Flat\Entities;

use App\Libraries\Flat\Entity;
use App\Libraries\Flat\Query\Query;

/**
 * @method static Query id($prefix=null)
 * @method static Query parent_id($prefix=null)
 * @method static Query name($prefix=null)
 * @method static Query slug($prefix=null)
 * @method static Query description($prefix=null)
 * @method static Query type($prefix=null)
 * @method static Query meta_data($prefix=null)
 * @method static Query is_active($prefix=null)
 * @method static Query user_create_id($prefix=null)
 * @method static Query user_update_id($prefix=null)
 * @method static Query is_deleted($prefix=null)
 * @method static Query created_time($prefix=null)
 * @method static Query modified_time($prefix=null)
 * @method static Query primary_key($prefix=null)
 */
class CategoryEntity extends Entity
{    
    /**
    * const - fields
    */
    const id = 'category.id';
    const parent_id = 'category.parent_id';
    const name = 'category.name';
    const slug = 'category.slug';
    const description = 'category.description';
    const type = 'category.type';
    const meta_data = 'category.meta_data';
    const is_active = 'category.is_active';
    const user_create_id = 'category.user_create_id';
    const user_update_id = 'category.user_update_id';
    const is_deleted = 'category.is_deleted';
    const created_time = 'category.created_time';
    const modified_time = 'category.modified_time';
    const primary_key = 'category.id';
    const table = '_category';
    const table_alias = 'category';
    /**
     * Schema
     */
     protected $schema = ['id','parent_id','name','slug','description','type','meta_data','is_active','user_create_id','user_update_id','is_deleted','created_time','modified_time'];
    /**
     * List of not nullable fields
     */
     protected $notNullAble = ['id','name','slug','type'];
    /**
     * List of fields withd efault value
     */
     protected $default = [];

    /**
    * @var \int(10) unsigned $id
    */
    public $id;
    /**
    * @var \int(10) unsigned $parent_id
    */
    public $parent_id;
    /**
    * @var \varchar(255) $name
    */
    public $name;
    /**
    * @var \varchar(255) $slug
    */
    public $slug;
    /**
    * @var \text $description
    */
    public $description;
    /**
    * @var \varchar(50) $type
    */
    public $type;
    /**
    * @var \text $meta_data
    */
    public $meta_data;
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