<?php

namespace App\Providers;

use App\Repositories\AuthorRepository;
use App\Repositories\Contracts\AuthorRepositoryInterface;
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

        App::bind(
            AuthorRepositoryInterface::class,
            AuthorRepository::class
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
