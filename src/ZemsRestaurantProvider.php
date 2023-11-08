<?php

namespace Zems\ZemsRestaurant;

use Illuminate\Support\ServiceProvider;

class ZemsRestaurantProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->LoadViewsFrom(__DIR__.'/views', 'zems_restaurant');
        $this->app->singleton(RestaurantController::class, function(){
            return new RestaurantController();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/Route.php');
        $this->publishes([
            __DIR__.'/../assets' => public_path('/'),
        ], 'public');
        // $this->app->singleton('command.mycommand', function () {
        //     return "@php artisan vendor:publish --tag=public --force";
        // });
        //php artisan vendor:publish --tag=public --force
    }
}
