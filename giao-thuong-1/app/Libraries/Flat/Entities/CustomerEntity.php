<?php

namespace App\Libraries\Flat\Entities;

use App\Libraries\Flat\Entity;
use App\Libraries\Flat\Query\Query;

/**
 * @method static Query id($prefix=null)
 * @method static Query first_name($prefix=null)
 * @method static Query middle_name($prefix=null)
 * @method static Query last_name($prefix=null)
 * @method static Query full_name($prefix=null)
 * @method static Query phone_number($prefix=null)
 * @method static Query email($prefix=null)
 * @method static Query gender($prefix=null)
 * @method static Query company($prefix=null)
 * @method static Query tax_code($prefix=null)
 * @method static Query avatar($prefix=null)
 * @method static Query date_of_birth($prefix=null)
 * @method static Query address($prefix=null)
 * @method static Query company_address($prefix=null)
 * @method static Query rank_id($prefix=null)
 * @method static Query facebook_id($prefix=null)
 * @method static Query zalo_id($prefix=null)
 * @method static Query user_create_id($prefix=null)
 * @method static Query user_update_id($prefix=null)
 * @method static Query is_active($prefix=null)
 * @method static Query is_deleted($prefix=null)
 * @method static Query created_time($prefix=null)
 * @method static Query modified_time($prefix=null)
 * @method static Query primary_key($prefix=null)
 */
class CustomerEntity extends Entity
{    
    /**
    * const - fields
    */
    const id = 'customer.id';
    const first_name = 'customer.first_name';
    const middle_name = 'customer.middle_name';
    const last_name = 'customer.last_name';
    const full_name = 'customer.full_name';
    const phone_number = 'customer.phone_number';
    const email = 'customer.email';
    const gender = 'customer.gender';
    const company = 'customer.company';
    const tax_code = 'customer.tax_code';
    const avatar = 'customer.avatar';
    const date_of_birth = 'customer.date_of_birth';
    const address = 'customer.address';
    const company_address = 'customer.company_address';
    const rank_id = 'customer.rank_id';
    const facebook_id = 'customer.facebook_id';
    const zalo_id = 'customer.zalo_id';
    const user_create_id = 'customer.user_create_id';
    const user_update_id = 'customer.user_update_id';
    const is_active = 'customer.is_active';
    const is_deleted = 'customer.is_deleted';
    const created_time = 'customer.created_time';
    const modified_time = 'customer.modified_time';
    const primary_key = 'customer.id';
    const table = '_customer';
    const table_alias = 'customer';
    /**
     * Schema
     */
     protected $schema = ['id','first_name','middle_name','last_name','full_name','phone_number','email','gender','company','tax_code','avatar','date_of_birth','address','company_address','rank_id','facebook_id','zalo_id','user_create_id','user_update_id','is_active','is_deleted','created_time','modified_time'];
    /**
     * List of not nullable fields
     */
     protected $notNullAble = ['id','full_name'];
    /**
     * List of fields withd efault value
     */
     protected $default = [];

    /**
    * @var \int(10) unsigned $id
    */
    public $id;
    /**
    * @var \varchar(50) $first_name
    */
    public $first_name;
    /**
    * @var \varchar(50) $middle_name
    */
    public $middle_name;
    /**
    * @var \varchar(50) $last_name
    */
    public $last_name;
    /**
    * @var \varchar(255) $full_name
    */
    public $full_name;
    /**
    * @var \varchar(25) $phone_number
    */
    public $phone_number;
    /**
    * @var \varchar(50) $email
    */
    public $email;
    /**
    * @var \enum('male','female','other') $gender
    */
    public $gender;
    /**
    * @var \varchar(255) $company
    */
    public $company;
    /**
    * @var \varchar(50) $tax_code
    */
    public $tax_code;
    /**
    * @var \varchar(255) $avatar
    */
    public $avatar;
    /**
    * @var \date $date_of_birth
    */
    public $date_of_birth;
    /**
    * @var \varchar(255) $address
    */
    public $address;
    /**
    * @var \varchar(255) $company_address
    */
    public $company_address;
    /**
    * @var \int(10) unsigned $rank_id
    */
    public $rank_id;
    /**
    * @var \bigint(20) unsigned $facebook_id
    */
    public $facebook_id;
    /**
    * @var \bigint(20) unsigned $zalo_id
    */
    public $zalo_id;
    /**
    * @var \int(10) unsigned $user_create_id
    */
    public $user_create_id;
    /**
    * @var \int(10) unsigned $user_update_id
    */
    public $user_update_id;
    /**
    * @var \tinyint(1) unsigned $is_active
    */
    public $is_active;
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