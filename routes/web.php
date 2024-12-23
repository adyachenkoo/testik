<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Article\EditController;
use App\Http\Controllers\Article\ShowController;
use App\Http\Controllers\Article\IndexController;
use App\Http\Controllers\Article\StoreController;
use App\Http\Controllers\Article\CreateController;
use App\Http\Controllers\Article\DeleteController;
use App\Http\Controllers\Article\UpdateController;
use App\Http\Controllers\Admin\Article\IndexController AS AdminIndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\MainController::class, 'main'])->name('index');

Route::prefix('articles')->group(function() {
    Route::get('/', IndexController::class)->name('articles.index');
    Route::get('/create', CreateController::class)->name('articles.create');
    Route::post('', StoreController::class)->name('articles.store');
    Route::get('/{id}', ShowController::class)->name('articles.show');
    Route::get('/{id}/edit', EditController::class)->name('articles.edit');
    Route::patch('/{id}', UpdateController::class)->name('articles.update');
    Route::delete('/{id}', DeleteController::class)->name('articles.delete');    
});

Route::prefix('/admin')->middleware('admin')->group( function() {
    Route::prefix('/articles')->group(function(){
        Route::get('/', AdminIndexController::class)->name('admin.articles.index');
    });
});
Auth::routes();

