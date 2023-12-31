<?php

namespace App\Providers;

use App\Models\Department;
use App\Models\Role;
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
        //
        view()->share('departments',Department::all());
        view()->share('roles',Role::all());
    }
}
