<?php

namespace App\Providers;

use App\Http\Data\InputFilter;
use App\Http\Data\Interfaces\Input;
use App\Libraries\Request\Api;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class RequestServiceProvider extends ServiceProvider
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
        $this->app->bind(InputFilter::class, function (){
            $request = app(Request::class);
            return app(InputFilter::class, [$request->all()]);
        });
    }

    public function boot()
    {

    }
}