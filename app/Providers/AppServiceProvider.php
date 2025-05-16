<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Laravel\Fortify\Contracts\{
    LoginViewResponse,
    RegisterViewResponse
};

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(LoginViewResponse::class, function () {
            return response()->view('auth.login');
        });

        $this->app->bind(RegisterViewResponse::class, function () {
            return response()->view('auth.register');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191); // Fixe la longueur maximale des clés
    }
}
