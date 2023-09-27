<?php

namespace SlickPay;

use Illuminate\Support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/extended_slickpay.php' => config_path('extended_slickpay.php'),
        ], 'SlickPay-config');
    }

    public function register()
    {
        //
    }
}