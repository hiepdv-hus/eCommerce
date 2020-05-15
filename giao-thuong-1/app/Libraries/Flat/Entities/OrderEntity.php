<?php

namespace App\Libraries\Flat\Entities;

use App\Libraries\Flat\Entity;
use App\Libraries\Flat\Query\Query;

/**
 * @method static Query id($prefix=null)
 * @method static Query total($prefix=null)
 * @method static Query grand_total($prefix=null)
 * @method static Query tax($prefix=null)
 * @method static Query discount($prefix=null)
 * @method static Query customer_note($prefix=null)
 * @method static Query user_note($prefix=null)
 * @method static Query customer_id($prefix=null)
 * @method static Query user_create_id($prefix=null)
 * @method static Query user_update_id($prefix=null)
 * @method static Query is_deleted($prefix=null)
 * @method static Query created_time($prefix=null)
 * @method static Query modified_time($prefix=null)
 * @method static Query primary_key($prefix=null)
 */
class OrderEntity extends Entity
{    
    /**
    * const - fields
    */
    const id = 'order.id';
    const total = 'order.total';
    const grand_total = 'order.grand_total';
    const tax = 'order.tax';
    const discount = 'order.discount';
    const customer_note = 'order.customer_note';
    const user_note = 'order.user_note';
    const customer_id = 'order.customer_id';
    const user_create_id = 'order.user_create_id';
    const user_update_id = 'order.user_update_id';
    const is_deleted = 'order.is_deleted';
    const created_time = 'order.created_time';
    const modified_time = 'order.modified_time';
    const primary_key = 'order.id';
    const table = '_order';
    const table_alias = 'order';
    /**
     * Schema
     */
     protected $schema = ['id','total','grand_total','tax','discount','customer_note','user_note','customer_id','user_create_id','user_update_id','is_deleted','created_time','modified_time'];
    /**
     * List of not nullable fields
     */
     protected $notNullAble = ['id','customer_id'];
    /**
     * List of fields withd efault value
     */
     protected $default = [];

    /**
    * @var \int(10) unsigned $id
    */
    public $id;
    /**
    * @var \double(15,2) unsigned $total
    */
    public $total;
    /**
    * @var \double(15,2) unsigned $grand_total
    */
    public $grand_total;
    /**
    * @var \double(15,2) unsigned $tax
    */
    public $tax;
    /**
    * @var \double(15,2) unsigned $discount
    */
    public $discount;
    /**
    * @var \text $customer_note
    */
    public $customer_note;
    /**
    * @var \text $user_note
    */
    public $user_note;
    /**
    * @var \int(10) unsigned $customer_id
    */
    public $customer_id;
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