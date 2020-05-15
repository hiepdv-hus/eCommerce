<?php

namespace App\Libraries\Flat\Entities;

use App\Libraries\Flat\Entity;
use App\Libraries\Flat\Query\Query;

/**
 * @method static Query id($prefix=null)
 * @method static Query media_id($prefix=null)
 * @method static Query width($prefix=null)
 * @method static Query height($prefix=null)
 * @method static Query url($prefix=null)
 * @method static Query is_deleted($prefix=null)
 * @method static Query created_time($prefix=null)
 * @method static Query modified_time($prefix=null)
 * @method static Query primary_key($prefix=null)
 */
class MediaThumbnailEntity extends Entity
{    
    /**
    * const - fields
    */
    const id = 'media_thumbnail.id';
    const media_id = 'media_thumbnail.media_id';
    const width = 'media_thumbnail.width';
    const height = 'media_thumbnail.height';
    const url = 'media_thumbnail.url';
    const is_deleted = 'media_thumbnail.is_deleted';
    const created_time = 'media_thumbnail.created_time';
    const modified_time = 'media_thumbnail.modified_time';
    const primary_key = 'media_thumbnail.id';
    const table = '_media_thumbnail';
    const table_alias = 'media_thumbnail';
    /**
     * Schema
     */
     protected $schema = ['id','media_id','width','height','url','is_deleted','created_time','modified_time'];
    /**
     * List of not nullable fields
     */
     protected $notNullAble = ['id','media_id','width','height','url'];
    /**
     * List of fields withd efault value
     */
     protected $default = [];

    /**
    * @var \int(10) unsigned $id
    */
    public $id;
    /**
    * @var \int(10) unsigned $media_id
    */
    public $media_id;
    /**
    * @var \int(10) unsigned $width
    */
    public $width;
    /**
    * @var \int(10) unsigned $height
    */
    public $height;
    /**
    * @var \varchar(255) $url
    */
    public $url;
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