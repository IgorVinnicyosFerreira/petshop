<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('App\Repositories\ClientRepository');
        $this->app->bind('App\Repositories\UserRepository');
    }
}
