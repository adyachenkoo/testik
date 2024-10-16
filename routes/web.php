<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ArticleController::class, 'main'])->name('index');

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');

Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');

Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');

Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');

Route::patch('/articles/{id}', [ArticleController::class, 'update'])->name('articles.update');

Route::delete('/articles/{id}', [ArticleController::class, 'delete'])->name('articles.delete');

Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');
