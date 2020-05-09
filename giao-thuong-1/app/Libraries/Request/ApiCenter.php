<?php

namespace App\Libraries\Request;

use App\Http\Models\Administrator;
use App\Http\Models\AdministratorGroupPivot;
use App\Http\Models\Product;
use App\Http\Models\UserGroup;
use App\Libraries\Constant;
use App\Libraries\Flat\Entities\ProductEntity;
use App\Libraries\Flat\Entities\SystemUserEntity;
use App\Libraries\Request\Data\Input;
use App\Libraries\Request\Data\ResponseJson;
use App\Libraries\Session\User;
use Illuminate\Routing\Pipeline;
use Illuminate\Support\Facades\Hash;

/**
 * Class ApiCenter
 * @package App\Libraries\Request
 */
class ApiCenter extends Api
{
    const UER_LOGIN = '';
    const USER_REGISTER = '';
    const USER_UPDATE = '';
    const USER_DELETE = '';

    const ORDER_GET_LIST = '';
    const ORDER_GET_LIST_STATUS = '';
    const ORDER_GET_DETAIL = '';
    const ORDER_CANCEL = '';
    const ORDER_CREATE = '';
    const ORDER_INCOME = '';
    const ORDER_COUNT = '';

    const SUPPORT_GET_LIST = '';
    const SUPPORT_GET_LIST_STATUS = '';
    const SUPPORT_GET_DETAIL = '';
    const SUPPORT_SAVE_COMMENT = '';
    const SUPPORT_ADD = '';
    const SUPPORT_GET_LIST_TYPE = '';
    const SUPPORT_GET_LIST_FEEDBACK_TYPE = '';

    const PRODUCT_SEARCH = '';

    /**
     * ApiCenter constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->httpClient->body([
            'token' => env('API_ACCESS_TOKEN'),
            'app_key' => env('API_KEY'),
            'app_secret' => env('API_SECRET')
        ]);
    }

    /**
     * Register new user
     * @param array $inputUser
     * @return ResponseJson|mixed
     */
    public function userRegister(array $inputUser)
    {
        $this->post(self::USER_REGISTER, $inputUser);
        return $this->output;
    }

    /**
     * Get login
     * @param array $inputUser
     * @return ResponseJson
     */
    public function userLogin(array $inputUser)
    {
        $admin = new Administrator();

        try
        {
            if (filter_var($inputUser['username'], FILTER_VALIDATE_EMAIL) !== false) {
                $admin->filter(
                    SystemUserEntity::email()->equal($inputUser['username'])
                );
            }
            else {
                $admin->filter(
                    SystemUserEntity::username()->equal($inputUser['username'])
                );
            }

            $admin->filter(
                SystemUserEntity::is_active()->equal(1)
            )->load();

            if($admin->exists() && Hash::check($inputUser['password'], $admin->entity->password))
            {
                $this->output->success = 1;
                $this->output->message = 'Login success!';
                $this->output->data = [
                    'id' => $admin->entity->getId(),
                    'firstName' => $admin->entity->first_name,
                    'lastName' => $admin->entity->last_name,
                    'fullName' => $admin->entity->full_name,
                    'phone' => $admin->entity->phone_number,
                    'email' => $admin->entity->email,
                    'username' => $inputUser['username'],
                    'address' => $admin->entity->address
                ];
            }
        } catch (\Exception $e){
            if(Constant::DEV_MODE == 1)
            {
                dd($e);
            }
        }


//        $this->post(self::UER_LOGIN, $inputUser);

        return $this->output;
    }

    /**
     * Get list of order
     * @param Input $input
     * @return ResponseJson
     * @throws \Exception
     */
    public function orderGetList(Input $input)
    {
        $this->post($this->apiCenter(self::ORDER_GET_LIST), $input);
        return $this->output;
    }

    /**
     * Get list of order status
     * @param Input $input
     * @return ResponseJson
     * @throws \Exception
     */
    public function orderGetListStatus(Input $input)
    {
        $this->post($this->apiCenter(self::ORDER_GET_LIST_STATUS), $input);
        return $this->output;
    }

    /**
     * Get detail of order
     * @param int $uid
     * @return ResponseJson
     * @throws \Exception
     */
    public function orderGetDetail(int $uid)
    {
        $this->post($this->apiCenter(self::ORDER_GET_DETAIL), ['uid' => $uid]);
        return $this->output;
    }

    /**
     * Create order
     * @param Input $input
     * @return ResponseJson
     * @throws \Exception
     */
    public function orderCreate(Input $input)
    {
        $this->post($this->apiCenter(self::ORDER_CREATE), $input);
        return $this->output;
    }

    /**
     * Cancel order
     * @param int $uid
     * @return ResponseJson
     * @throws \Exception
     */
    public function orderCancel(int $uid)
    {
        $this->post($this->apiCenter(self::ORDER_CANCEL), ['uid' => $uid]);
        return $this->output;
    }

    /**
     * Get order income
     * @return ResponseJson
     * @throws \Exception
     */
    public function orderIncome()
    {
        $this->post($this->apiCenter(self::ORDER_INCOME));
        return $this->output;
    }

    /**
     * Get order count
     * @return ResponseJson
     * @throws \Exception
     */
    public function orderCount()
    {
        $this->post($this->apiCenter(self::ORDER_COUNT));
        return $this->output;
    }

    /**
     * Get list of support
     * @param Input $input
     * @return ResponseJson
     * @throws \Exception
     */
    public function supportGetList(Input $input)
    {
        $this->post($this->apiCenter(self::SUPPORT_GET_LIST), $input);
        return $this->output;
    }

    /**
     * Get list of support status
     * @param Input $input
     * @return ResponseJson
     * @throws \Exception
     */
    public function supportGetListStatus(Input $input)
    {
        $this->post($this->apiCenter(self::SUPPORT_GET_LIST_STATUS), $input);
        return $this->output;
    }

    /**
     * Get detail
     * @param int $uid
     * @return ResponseJson
     * @throws \Exception
     */
    public function supportGetDetail(int $uid)
    {
        $this->post($this->apiCenter(self::SUPPORT_GET_DETAIL), ['uid' => $uid]);
        return $this->output;
    }

    /**
     * Save comment
     * @param Input $input
     * @return ResponseJson
     * @throws \Exception
     */
    public function supportSaveComment(Input $input)
    {
        $this->post($this->apiCenter(self::SUPPORT_SAVE_COMMENT), $input);
        return $this->output;
    }

    /**
     * Add support request
     * @param Input $input
     * @return ResponseJson
     * @throws \Exception
     */
    public function supportAdd(Input $input)
    {
        $this->post($this->apiCenter(self::SUPPORT_ADD), $input);
        return $this->output;
    }

    /**
     * Get list support type
     * @param Input $input
     * @return ResponseJson
     * @throws \Exception
     */
    public function supportGetListType(Input $input)
    {
        $this->post($this->apiCenter(self::SUPPORT_GET_LIST_TYPE), $input);
        return $this->output;
    }

    /**
     * Get list feedback type
     * @param Input $input
     * @return ResponseJson
     * @throws \Exception
     */
    public function supportGetListFeedbackType(Input $input)
    {
        $this->post($this->apiCenter(self::SUPPORT_GET_LIST_FEEDBACK_TYPE), $input);
        return $this->output;
    }

    /**
     * Search product
     * @param Input $input
     * @return ResponseJson
     * @throws \Exception
     */
    public function productSearch(Input $input)
    {
        $this->post($this->apiCenter(self::PRODUCT_SEARCH), $input);
        return $this->output;
    }
}
