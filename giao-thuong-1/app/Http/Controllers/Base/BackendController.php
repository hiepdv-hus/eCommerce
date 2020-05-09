<?php

namespace App\Http\Controllers\Base;

use App\Http\Models\Administrator;
use App\Libraries\Session\User;

/**
 * Class BackendController
 * @package App\Http\Controllers
 */
class BackendController extends AppController
{
    /**
     * @var Administrator $currentUser
     */
    protected $currentUser;

    /**
     * BackendController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        // Check authentication first
        $this->middleware('auth')->except(['showLoginForm', 'login']);
    }

    /**
     * Get current user logged in
     * @return Administrator
     */
    public function getCurrentUser()
    {
        if(!$this->currentUser)
        {
            // Get current user from session
            $this->currentUser = User::instanceAdmin();
        }

        return $this->currentUser;
    }
}