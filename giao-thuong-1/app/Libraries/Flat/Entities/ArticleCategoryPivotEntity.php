<?php

namespace App\Libraries\Flat\Entities;

use App\Libraries\Flat\Entity;
use App\Libraries\Flat\Query\Query;

/**
 * @method static Query id($prefix=null)
 * @method static Query article_id($prefix=null)
 * @method static Query category_id($prefix=null)
 * @method static Query user_create_id($prefix=null)
 * @method static Query user_update_id($prefix=null)
 * @method static Query is_deleted($prefix=null)
 * @method static Query created_time($prefix=null)
 * @method static Query modified_time($prefix=null)
 * @method static Query primary_key($prefix=null)
 */
class ArticleCategoryPivotEntity extends Entity
{    
    /**
    * const - fields
    */
    const id = 'article_category_pivot.id';
    const article_id = 'article_category_pivot.article_id';
    const category_id = 'article_category_pivot.category_id';
    const user_create_id = 'article_category_pivot.user_create_id';
    const user_update_id = 'article_category_pivot.user_update_id';
    const is_deleted = 'article_category_pivot.is_deleted';
    const created_time = 'article_category_pivot.created_time';
    const modified_time = 'article_category_pivot.modified_time';
    const primary_key = 'article_category_pivot.id';
    const table = '_article_category_pivot';
    const table_alias = 'article_category_pivot';
    /**
     * Schema
     */
     protected $schema = ['id','article_id','category_id','user_create_id','user_update_id','is_deleted','created_time','modified_time'];
    /**
     * List of not nullable fields
     */
     protected $notNullAble = ['id','article_id','category_id'];
    /**
     * List of fields withd efault value
     */
     protected $default = [];

    /**
    * @var \int(10) unsigned $id
    */
    public $id;
    /**
    * @var \int(10) unsigned $article_id
    */
    public $article_id;
    /**
    * @var \int(10) unsigned $category_id
    */
    public $category_id;
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