<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BootstrapServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      $this->publishes([__DIR__.'/../../vendor/twbs/bootstrap/dist/css' => public_path('css/bootstrap'),], 'public');
      $this->publishes([__DIR__.'/../../vendor/twbs/bootstrap/dist/js' => public_path('js/bootstrap'),], 'public');
      // note: fonts folder is only included in the dev-master of twitter/bootstrap
      //$this->publishes([__DIR__.'/../../vendor/twbs/bootstrap/dist/fonts' => public_path('fonts/bootstrap'),], 'public');
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
