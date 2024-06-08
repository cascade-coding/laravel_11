<?php

namespace App\Providers;

use App\Gates\IsAdminGate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
        // Gate::define('isAdmin', function ($user) {
        //     // dd($user);
        //     return $user->email === "david@gmail.com";
        // });

        Gate::define('isAdmin', [IsAdminGate::class, 'check_user']);
    }
}
