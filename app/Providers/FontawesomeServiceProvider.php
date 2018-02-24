<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FontawesomeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      $this->publishes([__DIR__.'/../../vendor/components/font-awesome/css' => public_path('css/font-awesome'),], 'public');
      $this->publishes([__DIR__.'/../../vendor/components/font-awesome/webfonts' => public_path('fonts/font-awesome'),], 'public');
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
