<?php
namespace App\Libraries\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string getAccessToken()
 * @method static string getRefreshToken()
 * @method static mixed get(string $url, $input = null)
 * @method static array post(string $url, $input = null)
 * @method static array put(string $url, $input = null)
 * @method static array delete(string $url, $input = null)
 *
 * @see \App\Libraries\Request\Api
 */
class Api extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'libs.api';
    }
}
