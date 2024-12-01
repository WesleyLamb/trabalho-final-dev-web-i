<?php

use App\Http\Controllers\View\HomeController;
use App\Http\Controllers\View\ViewDocumentController;
use App\Http\Controllers\View\ViewAuthorController;
use App\Http\Controllers\View\ViewAuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('', [HomeController::class, 'home'])->name('home');

Route::group([
    'prefix' => 'auth',
    'as' => 'auth.'
], function() {
    Route::get('login', [ViewAuthController::class, 'login'])->name('login.view');
    Route::get('register', [ViewAuthController::class, 'register'])->name('register.view');
});

Route::get('/user/update', [ViewAuthController::class, 'update'])->name('update.user'); //Não oficial, somente para trabalhar na view
// Authenticated routes
Route::group(['middleware' => 'auth:sanctum'], function() {
    Route::get('/user', [ViewAuthController::class, 'show'])->name('user.show.view');
    // Route::get('/user/update', [ViewAuthController::class, 'update'])->name('update.user'); //Não oficial, somente para trabalhar na view

    Route::group([
        'prefix' => 'documents',
        'as' => 'documents.'
    ], function() {
        Route::get('{id}/edit', [ViewDocumentController::class, 'edit'])->name('edit.view');
        // Route::post('', [ViewDocumentController::class, 'store'])->name('store.view');
        // Route::group(['prefix' => '{id}'], function() {
        //     Route::put('', [ViewDocumentController::class, 'update'])->name('update.view');
        //     Route::delete('', [ViewDocumentController::class, 'destroy'])->name('destroy.view');
        // });
    });

    Route::group([
        'prefix' => 'authors',
        'as' => 'authors.'
    ], function() {
        Route::post('', [ViewAuthorController::class, 'store'])->name('store.view');
        Route::group(['prefix' => '{id}'], function() {
            Route::put('', [ViewAuthorController::class, 'update'])->name('update.view');
            Route::delete('', [ViewAuthorController::class, 'destroy'])->name('destroy.view');
        });
    });
});

// Public routes
Route::group([
    'prefix' => 'documents',
    'as' => 'documents.'
], function() {
    Route::get('', [ViewDocumentController::class, 'index'])->name('catalog');
    Route::get('create', [ViewDocumentController::class,'create'])->name('create'); // Não oficial, somente para trabalhar na view
    // Route::get('details', [ViewDocumentController::class, 'details'])->name('details'); //Não oficial, somente para trabalhar na view
    Route::group(['prefix' => '{id}'], function() {
        Route::get('', [ViewDocumentController::class, 'show'])->name('view');
    });
    Route::get('download/{filename}', [ViewDocumentController::class, 'download'])->name('download');
});

// Route::group([
//     'prefix' => 'authors',
//     'as' => 'authors.'
// ], function() {
//     Route::get('', [ViewAuthorController::class, 'index'])->name('catalog');
//     Route::group(['prefix' => '{id}'], function() {
//         Route::get('', [ViewAuthorController::class, 'show'])->name('view');
//     });
// });