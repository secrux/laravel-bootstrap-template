<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class JqueryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__.'/../../vendor/components/jquery' => public_path('js/jquery'),], 'public');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
