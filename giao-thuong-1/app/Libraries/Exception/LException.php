<?php

namespace App\Libraries\Exception;

use App\Libraries\Constant;
use App\Libraries\Format\Str;
use App\Libraries\Request\Data\ResponseJson;
use Exception;

class LException extends Exception
{
    /**
     * Handle exception
     * @param Exception $exception
     * @param ResponseJson $response
     * @param null $defaultMessage
     */
    public static function handle(Exception $exception, ResponseJson $response, $defaultMessage = null)
    {
        $defaultMessage = Str::valueOrDefault($defaultMessage, 'web.error.default');
        if($exception instanceof LException || Constant::DEV_MODE == 1)
        {
            $message = Str::valueOrDefault($exception->getMessage(), $defaultMessage);
            $response->message = trans($message);
        }
        else{
            $response->message = trans($defaultMessage);
        }

        // @TODO: Log exception..
    }
}