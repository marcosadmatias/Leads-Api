<?php

namespace App\Providers;

use App\Repository\Origins\EloquentOriginsRepository;
use App\Repository\Origins\OriginsRepository;
use Illuminate\Support\ServiceProvider;

class OriginsProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(OriginsRepository::class, EloquentOriginsRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
