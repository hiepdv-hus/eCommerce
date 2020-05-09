<?php

namespace App\Providers;

use App\Libraries\Request\Api;
use App\Libraries\Request\ApiCenter;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Register Api Facade
        $this->app->bind('libs.api', Api::class);
        // Register ApiCenter Facade
        $this->app->bind('libs.api.center', ApiCenter::class);
    }

    public function boot()
    {

    }
}