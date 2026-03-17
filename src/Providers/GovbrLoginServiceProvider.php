<?php

namespace iEducar\Packages\GovbrLogin\Providers;

use Illuminate\Support\ServiceProvider;

class GovbrLoginServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/govbr-login.php',
            'govbr-login'
        );
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../config/govbr-login.php' => config_path('govbr-login.php'),
            ], 'govbr-login-config');
        }

        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
    }
}

