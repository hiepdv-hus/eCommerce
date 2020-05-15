<?php

namespace App\Libraries\Flat\Entities;

use App\Libraries\Flat\Entity;
use App\Libraries\Flat\Query\Query;

/**
 * @method static Query id($prefix=null)
 * @method static Query action($prefix=null)
 * @method static Query method($prefix=null)
 * @method static Query ip_address($prefix=null)
 * @method static Query error_message($prefix=null)
 * @method static Query created_time($prefix=null)
 * @method static Query primary_key($prefix=null)
 */
class ErrorLogEntity extends Entity
{    
    /**
    * const - fields
    */
    const id = 'error_log.id';
    const action = 'error_log.action';
    const method = 'error_log.method';
    const ip_address = 'error_log.ip_address';
    const error_message = 'error_log.error_message';
    const created_time = 'error_log.created_time';
    const primary_key = 'error_log.id';
    const table = '_error_log';
    const table_alias = 'error_log';
    /**
     * Schema
     */
     protected $schema = ['id','action','method','ip_address','error_message','created_time'];
    /**
     * List of not nullable fields
     */
     protected $notNullAble = ['id','action','method'];
    /**
     * List of fields withd efault value
     */
     protected $default = [];

    /**
    * @var \bigint(20) unsigned $id
    */
    public $id;
    /**
    * @var \text $action
    */
    public $action;
    /**
    * @var \text $method
    */
    public $method;
    /**
    * @var \text $ip_address
    */
    public $ip_address;
    /**
    * @var \text $error_message
    */
    public $error_message;
    /**
    * @var \datetime $created_time
    */
    public $created_time;
    
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