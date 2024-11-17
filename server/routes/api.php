<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DocumentController;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
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
    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        dd(get_class($request->user()));
        return new UserResource($request->user());
    });

    Route::group([
        'prefix' => 'documents',
        'middleware' => 'auth:sanctum'
    ], function() {
        Route::post('', [DocumentController::class, 'store']);
        Route::group(['prefix' => '{id}'], function() {
            Route::put('', [DocumentController::class, 'update']);
            Route::delete('', [DocumentController::class, 'destroy']);
        });
    });



    // Public routes
    Route::group(['prefix' => 'documents'], function() {
        Route::get('', [DocumentController::class, 'index']);
        Route::group(['prefix' => '{id}'], function() {
            Route::get('', [DocumentController::class, 'show']);
        });
    });
});