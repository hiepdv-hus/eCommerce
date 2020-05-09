<?php
namespace App\Libraries\Request;

/**
 * Class HttpStatusCode
 * @package App\Libraries\Request
 */
abstract class HttpStatusCode
{
    // 2xx Success
    const OK                        = 200;
    // 4xx Client error
    const BAD_REQUEST               = 400;
    const UNAUTHORIZED              = 401;
    const FORBIDDEN                 = 403;
    const NOT_FOUND                 = 404;
    const REQUEST_TIMEOUT           = 408;
    const LENGTH_REQUIRED           = 411;
    const UNSUPPORTED_MEDIA_TYPE    = 415;
    // 5xx Server error
    const INTERNAL_SERVER_ERROR     = 500;
    const SERVICE_UNAVAILABLE       = 503;
}

