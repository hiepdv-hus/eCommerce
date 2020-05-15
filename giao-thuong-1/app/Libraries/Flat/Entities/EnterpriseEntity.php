<?php

namespace App\Libraries\Flat\Entities;

use App\Libraries\Flat\Entity;
use App\Libraries\Flat\Query\Query;

/**
 * @method static Query id($prefix=null)
 * @method static Query name($prefix=null)
 * @method static Query slug($prefix=null)
 * @method static Query description($prefix=null)
 * @method static Query detail($prefix=null)
 * @method static Query media_id($prefix=null)
 * @method static Query user_create_id($prefix=null)
 * @method static Query user_update_id($prefix=null)
 * @method static Query is_deleted($prefix=null)
 * @method static Query created_time($prefix=null)
 * @method static Query modified_time($prefix=null)
 * @method static Query primary_key($prefix=null)
 */
class EnterpriseEntity extends Entity
{    
    /**
    * const - fields
    */
    const id = 'enterprise.id';
    const name = 'enterprise.name';
    const slug = 'enterprise.slug';
    const description = 'enterprise.description';
    const detail = 'enterprise.detail';
    const media_id = 'enterprise.media_id';
    const user_create_id = 'enterprise.user_create_id';
    const user_update_id = 'enterprise.user_update_id';
    const is_deleted = 'enterprise.is_deleted';
    const created_time = 'enterprise.created_time';
    const modified_time = 'enterprise.modified_time';
    const primary_key = 'enterprise.id';
    const table = '_enterprise';
    const table_alias = 'enterprise';
    /**
     * Schema
     */
     protected $schema = ['id','name','slug','description','detail','media_id','user_create_id','user_update_id','is_deleted','created_time','modified_time'];
    /**
     * List of not nullable fields
     */
     protected $notNullAble = ['id','name','slug','media_id'];
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
    * @var \varchar(255) $slug
    */
    public $slug;
    /**
    * @var \text $description
    */
    public $description;
    /**
    * @var \text $detail
    */
    public $detail;
    /**
    * @var \int(10) unsigned $media_id
    */
    public $media_id;
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