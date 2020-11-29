<?php

namespace App\Http\Repositories;

use Illuminate\Support\ServiceProvider;

class RepositoryBackendServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(
            /*
            * Register your Repository classes and interface here
            **/
            UserRepositoryInterface::class,
            UserRepository::class
        );

        $this->app->bind(
            /*
            * Register your Repository classes and interface here
            **/
            DevelopmentCompanyRepositoryInterface::class,
            DevelopmentCompanyRepository::class
        );
    }
}
