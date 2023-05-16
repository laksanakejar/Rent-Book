<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\User;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        // Gate::define('admin', function (User $name ) {
        //     return $name->role_id;
        // });
    }
}
