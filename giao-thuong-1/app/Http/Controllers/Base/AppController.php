<?php

namespace App\Http\Controllers\Base;

use App\Libraries\Exception\LException;
use App\Libraries\Request\Data\ResponseJson;
use App\Libraries\Session\User as SessionUser;
use App\Libraries\Traits\JsonResponseTrait;
use Exception;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class AppController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, JsonResponseTrait;

    /**
     * @var mixed $currentUser
     */
    protected $currentUser;

    /**
     * AppController constructor
     */
    public function __construct()
    {
        // For response output in json format
        $this->output = new ResponseJson();
    }

    /**
     * Get current user logged in
     * @return SessionUser
     */
    public function getCurrentUser()
    {
        if(!$this->currentUser)
        {
            // Get current user from session
            $this->currentUser = SessionUser::instance();
        }

        return $this->currentUser;
    }

    /**
     * Handle exception
     * @param Exception $exception
     * @param string $defaultMessage
     */
    protected function handleException(Exception $exception, $defaultMessage = null)
    {
        LException::handle($exception, $this->output, $defaultMessage);
    }
}
