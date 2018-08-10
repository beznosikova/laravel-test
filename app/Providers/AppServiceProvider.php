<?php

namespace App\Providers;

use App\Library\Services\Localization;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('share', '!!SHARE!!');
        view()->composer('test*', function ($view){
            $view->with('age', random_int(20,29));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('locale', function () {
            return new Localization();
        });
    }
}
