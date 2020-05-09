<?php

namespace App\Http\Controllers\Base;

use App\Http\Models\Customer;
use App\Libraries\Session\User;

/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class FrontendController extends AppController
{
    /**
     * @var Customer $currentUser
     */
    protected $currentUser;

    /**
     * Get current user logged in
     * @return Customer
     */
    public function getCurrentUser()
    {
        if(!$this->currentUser)
        {
            // Get current user from session
            $this->currentUser = User::instanceCustomer();
        }

        return $this->currentUser;
    }
}