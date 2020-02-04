<?php

namespace rajesh\slider;

use Illuminate\Support\ServiceProvider;

class SliderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'slider');
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
    }
}
