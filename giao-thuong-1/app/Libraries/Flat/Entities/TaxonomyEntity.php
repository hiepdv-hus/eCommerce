<?php

namespace App\Libraries\Flat\Entities;

use App\Libraries\Flat\Entity;
use App\Libraries\Flat\Query\Query;

/**
 * @method static Query id($prefix=null)
 * @method static Query name($prefix=null)
 * @method static Query label($prefix=null)
 * @method static Query description($prefix=null)
 * @method static Query user_create_id($prefix=null)
 * @method static Query user_update_id($prefix=null)
 * @method static Query is_deleted($prefix=null)
 * @method static Query created_time($prefix=null)
 * @method static Query modified_time($prefix=null)
 * @method static Query primary_key($prefix=null)
 */
class TaxonomyEntity extends Entity
{    
    /**
    * const - fields
    */
    const id = 'taxonomy.id';
    const name = 'taxonomy.name';
    const label = 'taxonomy.label';
    const description = 'taxonomy.description';
    const user_create_id = 'taxonomy.user_create_id';
    const user_update_id = 'taxonomy.user_update_id';
    const is_deleted = 'taxonomy.is_deleted';
    const created_time = 'taxonomy.created_time';
    const modified_time = 'taxonomy.modified_time';
    const primary_key = 'taxonomy.id';
    const table = '_taxonomy';
    const table_alias = 'taxonomy';
    /**
     * Schema
     */
     protected $schema = ['id','name','label','description','user_create_id','user_update_id','is_deleted','created_time','modified_time'];
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
    * @var \varchar(125) $name
    */
    public $name;
    /**
    * @var \varchar(125) $label
    */
    public $label;
    /**
    * @var \text $description
    */
    public $description;
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