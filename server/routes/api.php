<?php

use App\Http\Controllers\DocumentController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function () {
    Route::group(['prefix' => 'documents'], function() {
        Route::get('', [DocumentController::class, 'index']);
        Route::post('', [DocumentController::class, 'store']);
        Route::group(['prefix' => '{id}'], function() {
            Route::get('', [DocumentController::class, 'show']);
            Route::put('', [DocumentController::class, 'update']);
            Route::delete('', [DocumentController::class, 'destroy']);
        });
    });
});