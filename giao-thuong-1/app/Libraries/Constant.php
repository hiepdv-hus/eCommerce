<?php
namespace App\Libraries;

/**
 * Class Constant
 * @package App\Libraries
 */
class Constant
{
    public const DEV_MODE = 1;
    public const SESSION_USER_KEY = '_login_session_user_';
    public const SESSION_API_ACCESS_TOKEN_KEY = '_api_access_token_';

    public const SESSION_CONTRACT_STATUS_KEY = '_contract_status';
    public const SESSION_SUPPORT_STATUS_KEY = '_support_status';

    public const SESSION_CART_ID = '_cart_id';

    /**
     * Terms
     */
    public const SYSTEM_USER_TYPE_SUPER_ADMIN = 'SA';
    public const SYSTEM_USER_TYPE_ADMIN = 'A';

    public const ORDER_STATUS_PENDING = 1;
    public const ORDER_STATUS_APPROVING = 2;
    public const ORDER_STATUS_APPROVED = 3;
    public const ORDER_STATUS_SUCCESS = 4;
    public const ORDER_STATUS_SHIPPING = 5;
    public const ORDER_STATUS_CANCEL = 6;
    public const ORDER_STATUS_FAILED = 7;
}