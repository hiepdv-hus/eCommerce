<?php

namespace App\Libraries\Flat\Entities;

use App\Libraries\Flat\Entity;
use App\Libraries\Flat\Query\Query;

/**
 * @method static Query id($prefix=null)
 * @method static Query order_id($prefix=null)
 * @method static Query customer_id($prefix=null)
 * @method static Query product_id($prefix=null)
 * @method static Query sub_total($prefix=null)
 * @method static Query total($prefix=null)
 * @method static Query discount($prefix=null)
 * @method static Query quantity($prefix=null)
 * @method static Query user_create_id($prefix=null)
 * @method static Query user_update_id($prefix=null)
 * @method static Query is_deleted($prefix=null)
 * @method static Query created_time($prefix=null)
 * @method static Query modified_time($prefix=null)
 * @method static Query primary_key($prefix=null)
 */
class OrderItemEntity extends Entity
{    
    /**
    * const - fields
    */
    const id = 'order_item.id';
    const order_id = 'order_item.order_id';
    const customer_id = 'order_item.customer_id';
    const product_id = 'order_item.product_id';
    const sub_total = 'order_item.sub_total';
    const total = 'order_item.total';
    const discount = 'order_item.discount';
    const quantity = 'order_item.quantity';
    const user_create_id = 'order_item.user_create_id';
    const user_update_id = 'order_item.user_update_id';
    const is_deleted = 'order_item.is_deleted';
    const created_time = 'order_item.created_time';
    const modified_time = 'order_item.modified_time';
    const primary_key = 'order_item.id';
    const table = '_order_item';
    const table_alias = 'order_item';
    /**
     * Schema
     */
     protected $schema = ['id','order_id','customer_id','product_id','sub_total','total','discount','quantity','user_create_id','user_update_id','is_deleted','created_time','modified_time'];
    /**
     * List of not nullable fields
     */
     protected $notNullAble = ['id','order_id','customer_id','product_id','quantity'];
    /**
     * List of fields withd efault value
     */
     protected $default = [];

    /**
    * @var \int(10) unsigned $id
    */
    public $id;
    /**
    * @var \int(10) unsigned $order_id
    */
    public $order_id;
    /**
    * @var \int(10) unsigned $customer_id
    */
    public $customer_id;
    /**
    * @var \int(10) unsigned $product_id
    */
    public $product_id;
    /**
    * @var \double(15,2) unsigned $sub_total
    */
    public $sub_total;
    /**
    * @var \double(15,2) unsigned $total
    */
    public $total;
    /**
    * @var \double(15,2) unsigned $discount
    */
    public $discount;
    /**
    * @var \int(10) unsigned $quantity
    */
    public $quantity;
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