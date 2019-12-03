<?php

namespace App\Providers;

use App\Services\Converter;
use App\Services\ConverterNew;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (config('app.converter') == 1) {
            App::bind("converter", function () {
                return new ConverterNew();
            });
        } else {
            App::bind("converter", function () {
                return new Converter();
            });
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
