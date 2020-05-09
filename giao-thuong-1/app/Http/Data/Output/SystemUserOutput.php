<?php

namespace App\Http\Data\Output;

use App\Libraries\Flat\Entities\SystemUserEntity;
use App\Libraries\Request\Data\IO;

/**
 * Class SystemUserOutput
 * @package App\Http\Data\Output
 */
class SystemUserOutput extends IO
{
    public $username;
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
