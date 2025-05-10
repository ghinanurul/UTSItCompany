<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
use Illuminate\Support\Facades\URL;
=======
use Iluminate\Support\Facades\URL;
>>>>>>> f120636 (Update file setelah edit)

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
<<<<<<< HEAD
      if (env('APP_ENV') === 'production') {
        URL::forceScheme('https');
      }
=======
         if (env('APP_ENV') === 'production') {
        URL::forceScheme('https');
         }
>>>>>>> f120636 (Update file setelah edit)
    }
}
