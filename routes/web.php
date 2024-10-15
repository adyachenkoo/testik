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

Route::get('/', [ArticleController::class, 'index']);

Route::get('/articles', [ArticleController::class, 'show']);

Route::get('/articles/create', [ArticleController::class, 'create']);

Route::get('/articles/update/{id}', [ArticleController::class, 'update']);

Route::get('/articles/delete/{id}', [ArticleController::class, 'delete']);

Route::get('/articles/{id}', [ArticleController::class, 'one']);
