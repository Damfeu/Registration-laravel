<?php

namespace App\Providers;

use App\Interface\AuthenticationInterface;
use App\Repositories\AuthenticationRepository;
use Illuminate\Support\ServiceProvider;

class AuthenticationSericeProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(AuthenticationInterface::class, AuthenticationRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
