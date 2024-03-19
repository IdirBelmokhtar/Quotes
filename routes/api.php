<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ThemeController;
=======
use App\Http\Controllers\Api\ThemeController;
use App\Http\Controllers\Api\QuoteController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\UserController;
>>>>>>> 71ab626ba6118b5e445a36f9b4e130b525f6ebcc

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

<<<<<<< HEAD
Route::prefix('quotes')->group(function () {
    Route::get('/', [QuoteController::class, 'index']);
    Route::post('/', [QuoteController::class, 'store']);
    Route::get('/{id}', [QuoteController::class, 'show']);
    Route::put('/{id}', [QuoteController::class, 'update']);
    Route::delete('/{id}', [QuoteController::class, 'destroy']);
});

Route::post('/register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class,'login']);


Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);

    Route::post('/logout', [AuthController::class, 'logout']);

});

Route::middleware('auth:sanctum')->group(function () {

    
});

Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index']);
    Route::post('/', [CategoryController::class, 'store']);
    Route::get('/{id}', [CategoryController::class, 'show']);
    Route::put('/{id}', [CategoryController::class, 'update']);
    Route::delete('/{id}', [CategoryController::class, 'destroy']);
});

Route::prefix('themes')->group(function () {
    Route::get('/', [ThemeController::class, 'index']);
    Route::post('/', [ThemeController::class, 'store']);
    Route::get('/{id}', [ThemeController::class, 'show']);
    Route::put('/{id}', [ThemeController::class, 'update']);
    Route::delete('/{id}', [ThemeController::class, 'destroy']);
});

=======
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
});

Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
});

Route::prefix('themes')->group(function () {
    Route::get('/', [ThemeController::class, 'index']);
    Route::post('/', [ThemeController::class, 'store']);
    Route::get('/{id}', [ThemeController::class, 'show']);
    Route::put('/{id}', [ThemeController::class, 'update']);
    Route::delete('/{id}', [ThemeController::class, 'destroy']);
});

Route::prefix('quotes')->group(function () {
    Route::get('/', [QuoteController::class, 'index']);
    Route::post('/', [QuoteController::class, 'store']);
    Route::get('/{id}', [QuoteController::class, 'show']);
    Route::put('/{id}', [QuoteController::class, 'update']);
    Route::delete('/{id}', [QuoteController::class, 'destroy']);
});

Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index']);
    // Route::get('/{type}', [CategoryController::class, 'index_by_type']);
    Route::post('/', [CategoryController::class, 'store']);
    Route::get('/{id}', [CategoryController::class, 'show']);
    Route::put('/{id}', [CategoryController::class, 'update']);
    Route::delete('/{id}', [CategoryController::class, 'destroy']);
});

>>>>>>> 71ab626ba6118b5e445a36f9b4e130b525f6ebcc
