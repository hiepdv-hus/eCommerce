<?php

namespace App\Http\Data\Input;

use App\Libraries\Request\Data\Input;

/**
 * Class CustomerInput
 * @package App\Http\Data
 */
class CustomerInput extends Input
{
    public $first_name;
    public $last_name;
    public $full_name;
    public $phone_number;
    public $email;
    public $address;
    public $gender;
    public $facebook_id;
    public $zalo_id;
    public $avatar;
    public $date_of_birth;
    public $company_address;
    public $rank_id;
    public $is_active;
    public $created_time;

    /**
     * @var array $resultMap
     */
    protected $resultMap = [];

}
