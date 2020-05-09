<?php

namespace App\Http\Controllers\Base;

use App\Http\Models\User as UserModel;
use App\Libraries\Session\User;

/**
 * Class ApiController
 * @package App\Http\Controllers
 */
class ApiController extends AppController
{
    /**
     * @var UserModel $currentUser
     */
    protected $currentUser;

    /**
     * Get current user logged in
     * @return UserModel
     */
    public function getCurrentUser()
    {
        if(!$this->currentUser)
        {
            // Get current user from session
            $this->currentUser = User::instanceUser();
        }

        return $this->currentUser;
    }
}
