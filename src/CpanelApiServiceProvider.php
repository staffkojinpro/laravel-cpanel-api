<?php

namespace staffkojinpro;

use Illuminate\Support\ServiceProvider;
use victorapi\cPanel;

class CpanelApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__.'/config/cPanel.php' => config_path('cPanel.php'),
        ], 'config');

        $this->mergeConfigFrom(__DIR__.'/config/cPanel.php', 'cPanel');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->app->singleton(cPanel::class);
        $this->app->bind(cPanel::class);
        // $this->app->singleton(cPanel::class, function ($app) {
            // return new CorsService($this->corsOptions(), $app);
        // });
        // $this->app->bind(cPanel::class);
    }
}
