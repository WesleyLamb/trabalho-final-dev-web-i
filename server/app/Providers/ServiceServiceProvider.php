<?php

namespace App\Providers;

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
