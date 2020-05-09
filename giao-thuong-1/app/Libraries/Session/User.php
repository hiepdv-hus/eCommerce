<?php
namespace App\Libraries\Session;

/**
 * Class SessionUser
 * @package App\Libraries\Session
 */

use App\Http\Models\Administrator;
use App\Http\Models\Customer;
use App\Http\Models\User as UserModel;
use App\Libraries\Constant;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Session;

/**
 * @property int $id
 * @property string $name
 * @property string $username
 * @property string $phone
 * @property int $ci
 * @property string $cur
 */

class User extends Authenticatable
{
    /**
     * @var mixed $instance
     */
    private static $instance;

    protected $fillable = [
        'id',
        'username',
        'password',
        'firstName',
        'lastName',
        'fullName',
        'phone',
        'email',
        'address',
        'created_date',
        'created_from'
    ];

    /**
     * Get instance
     * @return Administrator
     */
    public static function instanceAdmin()
    {
        if(!self::$instance)
        {
            $sessionData = Session::get(Constant::SESSION_USER_KEY) ?? [];
            self::$instance = new Administrator();
            self::$instance->entity->fill($sessionData);
        }
        return self::$instance;
    }

    /**
     * Get instance
     * @return UserModel
     */
    public static function instanceUser()
    {
        if(!self::$instance)
        {
            $sessionData = Session::get(Constant::SESSION_USER_KEY) ?? [];
            self::$instance = new UserModel();
            self::$instance->entity->fill($sessionData);
        }
        return self::$instance;
    }

    /**
     * Get instance
     * @return Customer
     */
    public static function instanceCustomer()
    {
        if(!self::$instance)
        {
            $sessionData = Session::get(Constant::SESSION_USER_KEY) ?? [];
            self::$instance = new Customer();
            self::$instance->entity->fill($sessionData);
        }
        return self::$instance;
    }

    /**
     * Get instance
     * @return mixed
     */
    public static function instance()
    {
        return self::$instance;
    }

    /**
     * Get property
     * @param string $property
     */
    public static function get(string $property)
    {
        //dd(Session::get(Constant::SESSION_USER_KEY), self::instance()->id);
    }

    public function exists()
    {
        return $this->id > 0;
    }
}
