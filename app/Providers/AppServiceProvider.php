<?php

namespace App\Providers;

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
        if ($this->app->isLocal()) {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Validator::extend('ru_phone_number', function ($attribute, $value, $parameters) {
            return preg_match("%^((8|\+7)-?)?\(?\d{3}\)?-?\d-?\d-?\d-?\d-?\d-?\d-?\d$%u", $value);
        });
    }
}
