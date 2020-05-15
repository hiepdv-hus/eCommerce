<?php

namespace App\Libraries\Flat\Entities;

use App\Libraries\Flat\Entity;
use App\Libraries\Flat\Query\Query;

/**
 * @method static Query id($prefix=null)
 * @method static Query name($prefix=null)
 * @method static Query description($prefix=null)
 * @method static Query is_super($prefix=null)
 * @method static Query is_active($prefix=null)
 * @method static Query user_create_id($prefix=null)
 * @method static Query user_update_id($prefix=null)
 * @method static Query is_deleted($prefix=null)
 * @method static Query created_time($prefix=null)
 * @method static Query modified_time($prefix=null)
 * @method static Query primary_key($prefix=null)
 */
class SystemUserGroupEntity extends Entity
{    
    /**
    * const - fields
    */
    const id = 'system_user_group.id';
    const name = 'system_user_group.name';
    const description = 'system_user_group.description';
    const is_super = 'system_user_group.is_super';
    const is_active = 'system_user_group.is_active';
    const user_create_id = 'system_user_group.user_create_id';
    const user_update_id = 'system_user_group.user_update_id';
    const is_deleted = 'system_user_group.is_deleted';
    const created_time = 'system_user_group.created_time';
    const modified_time = 'system_user_group.modified_time';
    const primary_key = 'system_user_group.id';
    const table = '_system_user_group';
    const table_alias = 'system_user_group';
    /**
     * Schema
     */
     protected $schema = ['id','name','description','is_super','is_active','user_create_id','user_update_id','is_deleted','created_time','modified_time'];
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
    * @var \text $description
    */
    public $description;
    /**
    * @var \tinyint(1) unsigned $is_super
    */
    public $is_super;
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