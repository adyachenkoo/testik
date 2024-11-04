<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Article\EditController;
use App\Http\Controllers\Article\ShowController;
use App\Http\Controllers\Article\IndexController;
use App\Http\Controllers\Article\StoreController;
use App\Http\Controllers\Article\CreateController;
use App\Http\Controllers\Article\DeleteController;
use App\Http\Controllers\Article\UpdateController;

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

Route::get('/', [MainController::class, 'main'])->name('index');

Route::prefix('articles')->group(function() {
    Route::get('/', IndexController::class)->name('articles.index');
    Route::get('/create', CreateController::class)->name('articles.create');
    Route::post('', StoreController::class)->name('articles.store');
    Route::get('/{id}', ShowController::class)->name('articles.show');
    Route::get('/{id}/edit', EditController::class)->name('articles.edit');
    Route::patch('/{id}', UpdateController::class)->name('articles.update');
    Route::delete('/{id}', DeleteController::class)->name('articles.delete');    
});
