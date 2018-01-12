<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('fa\model\repository\contract\IUserRepositoryInterface', 'fa\model\repository\UserRepository');
        $this->app->bind('fa\model\repository\contract\IRoleRepositoryInterface', 'fa\model\repository\RoleRepository');
        $this->app->bind('fa\model\repository\contract\IPermissionRepositoryInterface', 'fa\model\repository\PermissionRepository');
        $this->app->bind('fa\model\repository\contract\IUserRoleRepositoryInterface', 'fa\model\repository\UserRoleRepository');
        $this->app->bind('fa\model\repository\contract\IPermissionRoleRepositoryInterface', 'fa\model\repository\PermissionRoleRepository');
    }
}
