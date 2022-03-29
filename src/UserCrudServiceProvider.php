<?php

namespace Smiley\UserCrud;

use Illuminate\Support\ServiceProvider;
use Smiley\UserCrud\Providers\EventServiceProvider;

class UserCrudServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(EventServiceProvider::class); // register an package's event service provider with application
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/usercrud.php', 'usercrud');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'usercrud');
        /* $this->publishes([
            __DIR__.'/../config/usercrud.php' => config_path('usercrud.php'),
            __DIR__.'/Models/User.php' => app_path('Models/User.php'),
            __DIR__.'/../resources/views' => resource_path('views/vendor/usercrud'),
        ]); */
        $this->publishes([__DIR__.'/../config/usercrud.php' => config_path('usercrud.php')], 'config');
        $this->publishes([__DIR__.'/../resources/views' => resource_path('views/vendor/usercrud')], 'views');
        
    }
}
