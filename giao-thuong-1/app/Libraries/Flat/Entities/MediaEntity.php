<?php

namespace App\Libraries\Flat\Entities;

use App\Libraries\Flat\Entity;
use App\Libraries\Flat\Query\Query;

/**
 * @method static Query id($prefix=null)
 * @method static Query mime_type($prefix=null)
 * @method static Query name($prefix=null)
 * @method static Query size($prefix=null)
 * @method static Query url($prefix=null)
 * @method static Query user_create_id($prefix=null)
 * @method static Query user_update_id($prefix=null)
 * @method static Query is_deleted($prefix=null)
 * @method static Query created_time($prefix=null)
 * @method static Query modified_time($prefix=null)
 * @method static Query primary_key($prefix=null)
 */
class MediaEntity extends Entity
{    
    /**
    * const - fields
    */
    const id = 'media.id';
    const mime_type = 'media.mime_type';
    const name = 'media.name';
    const size = 'media.size';
    const url = 'media.url';
    const user_create_id = 'media.user_create_id';
    const user_update_id = 'media.user_update_id';
    const is_deleted = 'media.is_deleted';
    const created_time = 'media.created_time';
    const modified_time = 'media.modified_time';
    const primary_key = 'media.id';
    const table = '_media';
    const table_alias = 'media';
    /**
     * Schema
     */
     protected $schema = ['id','mime_type','name','size','url','user_create_id','user_update_id','is_deleted','created_time','modified_time'];
    /**
     * List of not nullable fields
     */
     protected $notNullAble = ['id','mime_type','name','size','url'];
    /**
     * List of fields withd efault value
     */
     protected $default = [];

    /**
    * @var \int(10) unsigned $id
    */
    public $id;
    /**
    * @var \enum('image/png','image/jpeg','image/gif') $mime_type
    */
    public $mime_type;
    /**
    * @var \varchar(125) $name
    */
    public $name;
    /**
    * @var \double(8,2) $size
    */
    public $size;
    /**
    * @var \varchar(255) $url
    */
    public $url;
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