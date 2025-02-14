<?php

namespace App\Providers;

use App\Repository\Leads\EloquentLeadsRepository;
use App\Repository\Leads\LeadsRepository;
use Illuminate\Support\ServiceProvider;

class LeadsProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(LeadsRepository::class, EloquentLeadsRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
