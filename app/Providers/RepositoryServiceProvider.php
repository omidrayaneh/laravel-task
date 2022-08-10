<?php

namespace App\Providers;

use App\Repositories\ActivityInterface;
use App\Repositories\Eloquent\ActivityRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(ActivityInterface::class,ActivityRepository::class);
    }
}
