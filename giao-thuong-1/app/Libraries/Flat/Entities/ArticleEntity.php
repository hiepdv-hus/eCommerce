<?php

namespace App\Libraries\Flat\Entities;

use App\Libraries\Flat\Entity;
use App\Libraries\Flat\Query\Query;

/**
 * @method static Query id($prefix=null)
 * @method static Query title($prefix=null)
 * @method static Query slug($prefix=null)
 * @method static Query description($prefix=null)
 * @method static Query detail($prefix=null)
 * @method static Query media_id($prefix=null)
 * @method static Query user_create_id($prefix=null)
 * @method static Query user_update_id($prefix=null)
 * @method static Query is_deleted($prefix=null)
 * @method static Query created_time($prefix=null)
 * @method static Query modified_time($prefix=null)
 * @method static Query created_at($prefix=null)
 * @method static Query updated_at($prefix=null)
 * @method static Query primary_key($prefix=null)
 */
class ArticleEntity extends Entity
{    
    /**
    * const - fields
    */
    const id = 'article.id';
    const title = 'article.title';
    const slug = 'article.slug';
    const description = 'article.description';
    const detail = 'article.detail';
    const media_id = 'article.media_id';
    const user_create_id = 'article.user_create_id';
    const user_update_id = 'article.user_update_id';
    const is_deleted = 'article.is_deleted';
    const created_time = 'article.created_time';
    const modified_time = 'article.modified_time';
    const created_at = 'article.created_at';
    const updated_at = 'article.updated_at';
    const primary_key = 'article.id';
    const table = '_article';
    const table_alias = 'article';
    /**
     * Schema
     */
     protected $schema = ['id','title','slug','description','detail','media_id','user_create_id','user_update_id','is_deleted','created_time','modified_time','created_at','updated_at'];
    /**
     * List of not nullable fields
     */
     protected $notNullAble = ['id','title','slug','media_id'];
    /**
     * List of fields withd efault value
     */
     protected $default = [];

    /**
    * @var \int(10) unsigned $id
    */
    public $id;
    /**
    * @var \varchar(255) $title
    */
    public $title;
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
    * @var \timestamp $created_at
    */
    public $created_at;
    /**
    * @var \timestamp $updated_at
    */
    public $updated_at;
    
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