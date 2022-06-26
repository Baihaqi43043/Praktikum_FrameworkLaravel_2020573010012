<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class helperIDRServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        require_once app_path(). '/helper/helpers.php';
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
