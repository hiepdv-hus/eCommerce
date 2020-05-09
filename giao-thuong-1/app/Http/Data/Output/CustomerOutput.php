<?php

namespace App\Http\Data\Output;

use App\Libraries\Flat\Entities\CustomerEntity;
use App\Libraries\Request\Data\IO;

/**
 * Class CustomerOutput
 * @package App\Http\Data\Output
 */
class CustomerOutput extends IO
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
