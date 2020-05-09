<?php

namespace App\Http\Data\Input;

use App\Libraries\Request\Data\Input;

/**
 * Class SystemUserInput
 * @package App\Http\Data\Input
 */
class SystemUserInput extends Input
{
    public $username;
    public $password;
    public $first_name;
    public $last_name;
    public $full_name;
    public $email;
    public $phone_number;
    public $gender;
    public $avatar;
    public $date_of_birth;
    public $address;
    public $facebook_id;
    public $google_id;
    public $zalo_id;
    public $is_active;

    /**
     * @var array $resultMap
     */
    protected $resultMap = [];
}
