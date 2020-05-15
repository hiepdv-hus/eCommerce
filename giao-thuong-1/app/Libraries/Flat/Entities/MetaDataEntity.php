<?php

namespace App\Libraries\Flat\Entities;

use App\Libraries\Flat\Entity;
use App\Libraries\Flat\Query\Query;

/**
 * @method static Query id($prefix=null)
 * @method static Query key($prefix=null)
 * @method static Query value($prefix=null)
 * @method static Query description($prefix=null)
 * @method static Query user_create_id($prefix=null)
 * @method static Query user_update_id($prefix=null)
 * @method static Query is_deleted($prefix=null)
 * @method static Query created_time($prefix=null)
 * @method static Query modified_time($prefix=null)
 * @method static Query primary_key($prefix=null)
 */
class MetaDataEntity extends Entity
{    
    /**
    * const - fields
    */
    const id = 'meta_data.id';
    const key = 'meta_data.key';
    const value = 'meta_data.value';
    const description = 'meta_data.description';
    const user_create_id = 'meta_data.user_create_id';
    const user_update_id = 'meta_data.user_update_id';
    const is_deleted = 'meta_data.is_deleted';
    const created_time = 'meta_data.created_time';
    const modified_time = 'meta_data.modified_time';
    const primary_key = 'meta_data.id';
    const table = '_meta_data';
    const table_alias = 'meta_data';
    /**
     * Schema
     */
     protected $schema = ['id','key','value','description','user_create_id','user_update_id','is_deleted','created_time','modified_time'];
    /**
     * List of not nullable fields
     */
     protected $notNullAble = ['id','key'];
    /**
     * List of fields withd efault value
     */
     protected $default = [];

    /**
    * @var \int(10) unsigned $id
    */
    public $id;
    /**
    * @var \varchar(50) $key
    */
    public $key;
    /**
    * @var \text $value
    */
    public $value;
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