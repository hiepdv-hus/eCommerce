<?php

namespace App\Libraries\Flat\Entities;

use App\Libraries\Flat\Entity;
use App\Libraries\Flat\Query\Query;

/**
 * @method static Query id($prefix=null)
 * @method static Query user_id($prefix=null)
 * @method static Query group_id($prefix=null)
 * @method static Query user_create_id($prefix=null)
 * @method static Query user_update_id($prefix=null)
 * @method static Query is_deleted($prefix=null)
 * @method static Query created_time($prefix=null)
 * @method static Query modified_time($prefix=null)
 * @method static Query primary_key($prefix=null)
 */
class SystemUserGroupPivotEntity extends Entity
{    
    /**
    * const - fields
    */
    const id = 'system_user_group_pivot.id';
    const user_id = 'system_user_group_pivot.user_id';
    const group_id = 'system_user_group_pivot.group_id';
    const user_create_id = 'system_user_group_pivot.user_create_id';
    const user_update_id = 'system_user_group_pivot.user_update_id';
    const is_deleted = 'system_user_group_pivot.is_deleted';
    const created_time = 'system_user_group_pivot.created_time';
    const modified_time = 'system_user_group_pivot.modified_time';
    const primary_key = 'system_user_group_pivot.id';
    const table = '_system_user_group_pivot';
    const table_alias = 'system_user_group_pivot';
    /**
     * Schema
     */
     protected $schema = ['id','user_id','group_id','user_create_id','user_update_id','is_deleted','created_time','modified_time'];
    /**
     * List of not nullable fields
     */
     protected $notNullAble = ['id','user_id','group_id'];
    /**
     * List of fields withd efault value
     */
     protected $default = [];

    /**
    * @var \int(10) unsigned $id
    */
    public $id;
    /**
    * @var \int(10) unsigned $user_id
    */
    public $user_id;
    /**
    * @var \int(10) unsigned $group_id
    */
    public $group_id;
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