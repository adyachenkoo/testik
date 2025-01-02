<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Article\EditController;
use App\Http\Controllers\Article\ShowController;
use App\Http\Controllers\Article\IndexController;
use App\Http\Controllers\Article\StoreController;
use App\Http\Controllers\Article\CreateController;
use App\Http\Controllers\Article\DeleteController;
use App\Http\Controllers\Article\UpdateController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'api','prefix' => 'auth'], function ($router) {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
});

Route::group(['middleware'=>'jwt.auth', 'prefix'=>'articles'], function () {
    Route::get('/', IndexController::class);
    Route::get('/create', CreateController::class);
    Route::post('/', StoreController::class);
    Route::get('/{id}', ShowController::class);
    Route::get('/{id}/edit', EditController::class);
    Route::patch('/{id}', UpdateController::class);
    Route::delete('/{id}', DeleteController::class);  
});