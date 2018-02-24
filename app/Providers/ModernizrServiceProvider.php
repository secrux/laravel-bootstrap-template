<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ModernizrServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__.'/../../vendor/components/modernizr' => public_path('js/modernizr'),], 'public');
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
