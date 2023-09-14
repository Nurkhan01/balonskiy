<?php

namespace App\Providers;

use App\Services\Api\RoleService;
use Illuminate\Support\ServiceProvider;

class RoleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(RoleService::class, function () {
            return new RoleService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//        dd('hello world');
        //
    }
}
