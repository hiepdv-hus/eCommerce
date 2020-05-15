<?php

namespace App\Libraries\Flat\Entities;

use App\Libraries\Flat\Entity;
use App\Libraries\Flat\Query\Query;

/**
 * @method static Query id($prefix=null)
 * @method static Query name($prefix=null)
 * @method static Query label($prefix=null)
 * @method static Query description($prefix=null)
 * @method static Query module_id($prefix=null)
 * @method static Query action_type($prefix=null)
 * @method static Query path($prefix=null)
 * @method static Query is_active($prefix=null)
 * @method static Query user_create_id($prefix=null)
 * @method static Query user_update_id($prefix=null)
 * @method static Query is_deleted($prefix=null)
 * @method static Query created_time($prefix=null)
 * @method static Query modified_time($prefix=null)
 * @method static Query primary_key($prefix=null)
 */
class SystemRoleEntity extends Entity
{    
    /**
    * const - fields
    */
    const id = 'system_role.id';
    const name = 'system_role.name';
    const label = 'system_role.label';
    const description = 'system_role.description';
    const module_id = 'system_role.module_id';
    const action_type = 'system_role.action_type';
    const path = 'system_role.path';
    const is_active = 'system_role.is_active';
    const user_create_id = 'system_role.user_create_id';
    const user_update_id = 'system_role.user_update_id';
    const is_deleted = 'system_role.is_deleted';
    const created_time = 'system_role.created_time';
    const modified_time = 'system_role.modified_time';
    const primary_key = 'system_role.id';
    const table = '_system_role';
    const table_alias = 'system_role';
    /**
     * Schema
     */
     protected $schema = ['id','name','label','description','module_id','action_type','path','is_active','user_create_id','user_update_id','is_deleted','created_time','modified_time'];
    /**
     * List of not nullable fields
     */
     protected $notNullAble = ['id','name','label','module_id'];
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
    * @var \int(10) unsigned $module_id
    */
    public $module_id;
    /**
    * @var \enum('get','post','put','delete') $action_type
    */
    public $action_type;
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