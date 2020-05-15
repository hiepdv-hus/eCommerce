<?php

namespace App\Libraries\Flat\Entities;

use App\Libraries\Flat\Entity;
use App\Libraries\Flat\Query\Query;

/**
 * @method static Query id($prefix=null)
 * @method static Query name($prefix=null)
 * @method static Query label($prefix=null)
 * @method static Query description($prefix=null)
 * @method static Query path($prefix=null)
 * @method static Query is_active($prefix=null)
 * @method static Query user_create_id($prefix=null)
 * @method static Query user_update_id($prefix=null)
 * @method static Query is_deleted($prefix=null)
 * @method static Query created_time($prefix=null)
 * @method static Query modified_time($prefix=null)
 * @method static Query primary_key($prefix=null)
 */
class SystemModuleEntity extends Entity
{    
    /**
    * const - fields
    */
    const id = 'system_module.id';
    const name = 'system_module.name';
    const label = 'system_module.label';
    const description = 'system_module.description';
    const path = 'system_module.path';
    const is_active = 'system_module.is_active';
    const user_create_id = 'system_module.user_create_id';
    const user_update_id = 'system_module.user_update_id';
    const is_deleted = 'system_module.is_deleted';
    const created_time = 'system_module.created_time';
    const modified_time = 'system_module.modified_time';
    const primary_key = 'system_module.id';
    const table = '_system_module';
    const table_alias = 'system_module';
    /**
     * Schema
     */
     protected $schema = ['id','name','label','description','path','is_active','user_create_id','user_update_id','is_deleted','created_time','modified_time'];
    /**
     * List of not nullable fields
     */
     protected $notNullAble = ['id','name','label','path'];
    /**
     * List of fields withd efault value
     */
     protected $default = [];

    /**
    * @var \int(10) unsigned $id
    */
    public $id;
    /**
    * @var \varchar(255) $name
    */
    public $name;
    /**
    * @var \varchar(255) $label
    */
    public $label;
    /**
    * @var \text $description
    */
    public $description;
    /**
    * @var \varchar(255) $path
    */
    public $path;
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