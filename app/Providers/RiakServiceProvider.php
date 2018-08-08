<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Library\Services\DemoTwo;
use App\Library\Services\DemoOne;

class RiakServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//        $this->app->resolving(DemoOne::class, function ($one, $app) {
//            dump("one");
//        });
        view()->composer('view', function () {

        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Library\Services\Contracts\CustomServiceInterface', function ($app) {
            return new DemoOne();
        });
    }

    public function provides()
    {
        return ['App\Library\Services\Contracts\CustomServiceInterface'];
    }
}
