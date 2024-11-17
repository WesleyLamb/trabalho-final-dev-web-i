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


Route::group(['prefix' => 'v1'], function () {
    Route::group(['prefix' => 'auth'], function() {
        Route::post('login', [AuthController::class, 'login']);
        Route::post('register', [AuthController::class, 'register']);
    });

    // Authenticated routes
    Route::group(['middleware' => 'auth:sanctum'], function() {
        Route::get('/user', [AuthController::class, 'show']);

        Route::group(['prefix' => 'documents'], function() {
            Route::post('', [DocumentController::class, 'store']);
            Route::group(['prefix' => '{id}'], function() {
                Route::put('', [DocumentController::class, 'update']);
                Route::delete('', [DocumentController::class, 'destroy']);
            });
        });

        Route::group(['prefix' => 'authors'], function() {
            Route::post('', [AuthorController::class, 'store']);
            Route::group(['prefix' => '{id}'], function() {
                Route::put('', [AuthorController::class, 'update']);
                Route::delete('', [AuthorController::class, 'destroy']);
            });
        });
    });




    // Public routes
    Route::group(['prefix' => 'documents'], function() {
        Route::get('', [DocumentController::class, 'index']);
        Route::group(['prefix' => '{id}'], function() {
            Route::get('', [DocumentController::class, 'show']);
        });
    });

    Route::group(['prefix' => 'authors'], function() {
        Route::get('', [AuthorController::class, 'index']);
        Route::group(['prefix' => '{id}'], function() {
            Route::get('', [AuthorController::class, 'show']);
        });
    });
});