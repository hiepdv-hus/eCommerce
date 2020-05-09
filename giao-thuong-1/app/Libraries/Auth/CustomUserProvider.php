<?php

namespace App\Libraries\Auth;

use App\Libraries\Constant;
use App\Libraries\Facades\ApiCenter;
use App\Libraries\Request\Data\ResponseJson;
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;
use Jenssegers\Agent\Agent;

class CustomUserProvider extends EloquentUserProvider
{
    /**
     * Retrieve a user by their unique identifier.
     *
     * @param  mixed  $identifier
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveById($identifier)
    {
        $model = $this->createModel();
        $user = Session::get(Constant::SESSION_USER_KEY, []);
        $userId = $user[$model->getAuthIdentifierName()] ?? 0;

        if($userId <= 0 || $userId != $identifier)
        {
            return null;
        }

        return $this->createModel([$user]);
    }

    /**
     * Retrieve a user by their unique identifier and "remember me" token.
     *
     * @param  mixed  $identifier
     * @param  string  $token
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveByToken($identifier, $token)
    {
        $model = $this->retrieveById($identifier);

        if (! $model) {
            return null;
        }

        $rememberToken = $model->getRememberToken();

        return $rememberToken && hash_equals($rememberToken, $token) ? $model : null;
    }

    /**
     * Update the "remember me" token for the given user in storage.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable|\Illuminate\Database\Eloquent\Model  $user
     * @param  string  $token
     * @return void
     */
    public function updateRememberToken(UserContract $user, $token)
    {
        $user->setRememberToken($token);
    }

    /**
     * Retrieve a user by the given credentials.
     *
     * @param  array  $credentials
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveByCredentials(array $credentials)
    {
        if (empty($credentials) ||
            (count($credentials) === 1 &&
                array_key_exists('password', $credentials))) {
            return null;
        }

        $user = $this->getUserFromApi($credentials);
        if(!$user || $user['id'] <= 0)
        {
            return null;
        }

        return $this->createModel($user);
    }

    /**
     * Validate a user against the given credentials.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  array  $credentials
     * @return bool
     */
    public function validateCredentials(UserContract $user, array $credentials)
    {
        $plain = $credentials['password'];
        return $this->hasher->check($plain, $user->getAuthPassword());
    }

    /**
     * Create a new instance of the model.
     *
     * @param array $attribute
     * @return \Illuminate\Contracts\Auth\Authenticatable
     */
    public function createModel(array $attribute = [])
    {
        $class = '\\'.ltrim($this->model, '\\');
        return new $class($attribute);
    }

    /**
     * @param array $credentials
     * @return array
     */
    protected function getUserFromApi(array $credentials)
    {
        $user = null;
        $agent = new Agent(); // for getting agent

        $credentials['src'] = '';
        $credentials['ip'] = Request::ip();
        $credentials['os'] = $agent->platform() . $agent->version($agent->platform());
        $credentials['device'] = $agent->device();

        // Get login from api center
        /**
         * @var ResponseJson $ret
         */
        $ret = ApiCenter::userLogin($credentials);
        if($ret->isSuccess())
        {
            $user = (array)$ret->data;
            $user['password'] = $this->hasher->make($credentials['password']);
        }

        return $user;
    }
}
