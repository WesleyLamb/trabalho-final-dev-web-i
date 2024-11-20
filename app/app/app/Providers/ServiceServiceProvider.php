<?php

namespace App\Providers;

use App\Services\AuthorService;
use App\Services\Contracts\AuthorServiceInterface;
use App\Services\Contracts\DocumentServiceInterface;
use App\Services\DocumentService;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        App::bind(
            DocumentServiceInterface::class,
            DocumentService::class
        );

        App::bind(
            AuthorServiceInterface::class,
            AuthorService::class
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
