<?php

namespace App\Libraries\Auth;

use Illuminate\Auth\AuthManager;
use Illuminate\Foundation\Application;

class CustomerAuthManager extends AuthManager
{
    /**
     * The registered custom provider creators.
     *
     * @var array
     */
    protected $customProviderCreators = [];

    public function __construct(Application $app)
    {
        parent::__construct($app);
        $this->customProviderCreators['eloquent'] = [$this, 'createCustomUserProvider'];
    }

    public function createCustomUserProvider($app, $config)
    {
        return new CustomUserProvider($app['hash'], $config['model']);
    }

    /**
     * Create a session based authentication guard.
     *
     * @param  string  $name
     * @param  array  $config
     * @return \Illuminate\Auth\SessionGuard
     */
    public function createSessionDriver($name, $config)
    {
        $provider = $this->createUserProvider($config['provider'] ?? null);

        $guard = new CustomerSessionGuard($name, $provider, $this->app['session.store']);

        // When using the remember me functionality of the authentication services we
        // will need to be set the encryption instance of the guard, which allows
        // secure, encrypted cookie values to get generated for those cookies.
        if (method_exists($guard, 'setCookieJar')) {
            $guard->setCookieJar($this->app['cookie']);
        }

        if (method_exists($guard, 'setDispatcher')) {
            $guard->setDispatcher($this->app['events']);
        }

        if (method_exists($guard, 'setRequest')) {
            $guard->setRequest($this->app->refresh('request', $guard, 'setRequest'));
        }

        return $guard;
    }
}
