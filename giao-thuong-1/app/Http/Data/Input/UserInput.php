<?php

namespace App\Http\Data\Input;

use App\Libraries\Request\Data\Input;

/**
 * Class UserInput
 * @package App\Http\Data\Input
 */
class UserInput extends Input
{
    /**
     * @var int $id
     */
    public $id;
    /**
     * @var string $name
     */
    public $name;
    /**
     * @var string $phone
     */
    public $phone;
    /**
     * @var string $email
     */
    public $email;
    /**
     * @var string $address
     */
    public $address;
    /**
     * @var string $username
     */
    public $username;
    /**
     * @var string $username
     */
    public $password;
}