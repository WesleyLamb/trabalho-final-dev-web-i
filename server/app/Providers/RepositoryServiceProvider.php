<?php

namespace App\Providers;

use App\Repositories\Contracts\DocumentRepositoryInterface;
use App\Repositories\DocumentRepository;
use Illuminate\Support\Facades\App;
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
        App::bind(
            DocumentRepositoryInterface::class,
            DocumentRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
