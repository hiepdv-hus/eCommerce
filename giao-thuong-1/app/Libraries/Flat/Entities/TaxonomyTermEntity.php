<?php

namespace App\Libraries\Flat\Entities;

use App\Libraries\Flat\Entity;
use App\Libraries\Flat\Query\Query;

/**
 * @method static Query id($prefix=null)
 * @method static Query taxonomy_id($prefix=null)
 * @method static Query name($prefix=null)
 * @method static Query slug($prefix=null)
 * @method static Query description($prefix=null)
 * @method static Query meta_data($prefix=null)
 * @method static Query is_active($prefix=null)
 * @method static Query user_create_id($prefix=null)
 * @method static Query user_update_id($prefix=null)
 * @method static Query is_deleted($prefix=null)
 * @method static Query created_time($prefix=null)
 * @method static Query modified_time($prefix=null)
 * @method static Query primary_key($prefix=null)
 */
class TaxonomyTermEntity extends Entity
{    
    /**
    * const - fields
    */
    const id = 'taxonomy_term.id';
    const taxonomy_id = 'taxonomy_term.taxonomy_id';
    const name = 'taxonomy_term.name';
    const slug = 'taxonomy_term.slug';
    const description = 'taxonomy_term.description';
    const meta_data = 'taxonomy_term.meta_data';
    const is_active = 'taxonomy_term.is_active';
    const user_create_id = 'taxonomy_term.user_create_id';
    const user_update_id = 'taxonomy_term.user_update_id';
    const is_deleted = 'taxonomy_term.is_deleted';
    const created_time = 'taxonomy_term.created_time';
    const modified_time = 'taxonomy_term.modified_time';
    const primary_key = 'taxonomy_term.id';
    const table = '_taxonomy_term';
    const table_alias = 'taxonomy_term';
    /**
     * Schema
     */
     protected $schema = ['id','taxonomy_id','name','slug','description','meta_data','is_active','user_create_id','user_update_id','is_deleted','created_time','modified_time'];
    /**
     * List of not nullable fields
     */
     protected $notNullAble = ['id','taxonomy_id','name','slug'];
    /**
     * List of fields withd efault value
     */
     protected $default = [];

    /**
    * @var \int(10) unsigned $id
    */
    public $id;
    /**
    * @var \int(10) unsigned $taxonomy_id
    */
    public $taxonomy_id;
    /**
    * @var \varchar(125) $name
    */
    public $name;
    /**
    * @var \varchar(125) $slug
    */
    public $slug;
    /**
    * @var \text $description
    */
    public $description;
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