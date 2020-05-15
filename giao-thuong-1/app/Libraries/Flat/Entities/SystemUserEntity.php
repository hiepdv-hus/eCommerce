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
 * @method static Query username($prefix=null)
 * @method static Query password($prefix=null)
 * @method static Query phone_number($prefix=null)
 * @method static Query email($prefix=null)
 * @method static Query gender($prefix=null)
 * @method static Query avatar($prefix=null)
 * @method static Query date_of_birth($prefix=null)
 * @method static Query address($prefix=null)
 * @method static Query facebook_id($prefix=null)
 * @method static Query zalo_id($prefix=null)
 * @method static Query is_super($prefix=null)
 * @method static Query is_active($prefix=null)
 * @method static Query user_create_id($prefix=null)
 * @method static Query user_update_id($prefix=null)
 * @method static Query is_deleted($prefix=null)
 * @method static Query created_time($prefix=null)
 * @method static Query modified_time($prefix=null)
 * @method static Query primary_key($prefix=null)
 */
class SystemUserEntity extends Entity
{    
    /**
    * const - fields
    */
    const id = 'system_user.id';
    const first_name = 'system_user.first_name';
    const middle_name = 'system_user.middle_name';
    const last_name = 'system_user.last_name';
    const full_name = 'system_user.full_name';
    const username = 'system_user.username';
    const password = 'system_user.password';
    const phone_number = 'system_user.phone_number';
    const email = 'system_user.email';
    const gender = 'system_user.gender';
    const avatar = 'system_user.avatar';
    const date_of_birth = 'system_user.date_of_birth';
    const address = 'system_user.address';
    const facebook_id = 'system_user.facebook_id';
    const zalo_id = 'system_user.zalo_id';
    const is_super = 'system_user.is_super';
    const is_active = 'system_user.is_active';
    const user_create_id = 'system_user.user_create_id';
    const user_update_id = 'system_user.user_update_id';
    const is_deleted = 'system_user.is_deleted';
    const created_time = 'system_user.created_time';
    const modified_time = 'system_user.modified_time';
    const primary_key = 'system_user.id';
    const table = '_system_user';
    const table_alias = 'system_user';
    /**
     * Schema
     */
     protected $schema = ['id','first_name','middle_name','last_name','full_name','username','password','phone_number','email','gender','avatar','date_of_birth','address','facebook_id','zalo_id','is_super','is_active','user_create_id','user_update_id','is_deleted','created_time','modified_time'];
    /**
     * List of not nullable fields
     */
     protected $notNullAble = ['id','first_name','last_name','full_name','username','password'];
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
    * @var \varchar(50) $username
    */
    public $username;
    /**
    * @var \varchar(128) $password
    */
    public $password;
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
    * @var \bigint(20) unsigned $facebook_id
    */
    public $facebook_id;
    /**
    * @var \bigint(20) unsigned $zalo_id
    */
    public $zalo_id;
    /**
    * @var \tinyint(1) unsigned $is_super
    */
    public $is_super;
    /**
    * @var \tinyint(1) unsigned $is_active
    */
    public $is_active;
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