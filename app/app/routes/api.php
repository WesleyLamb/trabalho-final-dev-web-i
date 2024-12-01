<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\AuthorController;
use App\Http\Controllers\Api\DocumentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group([
    'prefix' => 'v1',
    'as' => 'api.v1.'
], function () {
    Route::group([
        'prefix' => 'auth',
        'as' => 'auth.'
    ], function() {
        Route::post('login', [AuthController::class, 'login'])->name('login');
        Route::post('register', [AuthController::class, 'register'])->name('register');
    });

    // Authenticated routes
    Route::group(['middleware' => 'auth:sanctum'], function() {
        Route::get('/user', [AuthController::class, 'show'])->name('user.show');

        Route::group([
            'prefix' => 'documents',
            'as' => 'documents.'
        ], function() {
            Route::post('', [DocumentController::class, 'store'])->name('store');
            Route::group(['prefix' => '{id}'], function() {
                Route::put('', [DocumentController::class, 'update'])->name('update');
                Route::delete('', [DocumentController::class, 'destroy'])->name('destroy');
            });
        });

        Route::group([
            'prefix' => 'authors',
            'as' => 'authors.'
        ], function() {
            Route::post('', [AuthorController::class, 'store'])->name('store');
            Route::group(['prefix' => '{id}'], function() {
                Route::put('', [AuthorController::class, 'update'])->name('update');
                Route::delete('', [AuthorController::class, 'destroy'])->name('destroy');
            });
        });
    });

    // Public routes
    Route::group([
        'prefix' => 'documents',
        'as' => 'documents.'
    ], function() {
        Route::get('', [DocumentController::class, 'index'])->name('index');
        Route::group(['prefix' => '{id}'], function() {
            Route::get('', [DocumentController::class, 'show'])->name('show');
        });
    });

    Route::group([
        'prefix' => 'authors',
        'as' => 'authors.'
    ], function() {
        Route::get('', [AuthorController::class, 'index'])->name('index');
        Route::group(['prefix' => '{id}'], function() {
            Route::get('', [AuthorController::class, 'show'])->name('show');
        });
    });
});