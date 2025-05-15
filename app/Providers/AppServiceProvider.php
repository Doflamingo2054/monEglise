<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Le namespace pour les contrôleurs de route.
     */
    protected $namespace = 'App\\Http\\Controllers';

    /**
     * Définir les routes de l'application.
     */
    public function boot(): void
    {
        parent::boot();
    }

    /**
     * Mapper les routes.
     */
    public function map(): void
    {
        $this->mapApiRoutes();
        $this->mapWebRoutes();
    }

    protected function mapWebRoutes(): void
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    protected function mapApiRoutes(): void
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace . '\\Api') // si tu veux organiser tes contrôleurs API dans App\Http\Controllers\Api
            ->group(base_path('routes/api.php'));
    }
}
