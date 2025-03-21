<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        // Fix for MySQL older than 5.7.7 and MariaDB older than 10.2.2
        // https://laravel.com/docs/8.x/migrations#creating-indexes
        Schema::defaultStringLength(191);
    }
}
