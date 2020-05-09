<?php

namespace App\Libraries\Auth;

use App\Libraries\Constant;
use Illuminate\Auth\SessionGuard;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

/**
 * Class CustomerSessionGuard
 * @package App\Libraries\Auth
 */
class CustomerSessionGuard extends SessionGuard
{
    /**
     * Log a user into the application.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  bool  $remember
     * @return void
     */
    public function login(AuthenticatableContract $user, $remember = false)
    {
        $this->updateSession($user);

        // If the user should be permanently "remembered" by the application we will
        // queue a permanent cookie that contains the encrypted copy of the user
        // identifier. We will then decrypt this later to retrieve the users.
        if ($remember) {
            $this->ensureRememberTokenIsSet($user);

            $this->queueRecallerCookie($user);
        }

        // If we have an event dispatcher instance set we will fire an event so that
        // any listeners will hook into the authentication events and run actions
        // based on the login and logout events fired from the guard instances.
        $this->fireLoginEvent($user, $remember);

        $this->setUser($user);
    }

    /**
     * Update the session with the given ID.
     *
     * @param  mixed  $user
     * @return void
     */
    protected function updateSession($user)
    {
        $userAttributes = $user->toArray();
        unset($userAttributes['password']);

        $this->session->put(Constant::SESSION_USER_KEY, $userAttributes);
        parent::updateSession($user->getAuthIdentifier());
    }
}