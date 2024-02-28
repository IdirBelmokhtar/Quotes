<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ThemeController;
use App\Http\Controllers\Api\QuoteController;


use App\Models\Category;
use App\Models\Test;

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

Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/', [UserController::class, 'store']); 
    Route::get('/{id}', [UserController::class, 'show']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
});
Route::prefix('Categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index']);
    Route::post('/', [CategoryController::class, 'store']);
    Route::get('/{id}', [CategoryController::class, 'show']);
    Route::put('/{id}', [CategoryController::class, 'update']);
    Route::delete('/{id}', [CategoryController::class, 'destroy']);
});
Route::prefix('tests')->group(function () {
    Route::get('/', [ThemeController::class, 'index']);
    Route::post('/', [ThemeController::class, 'store']);
    Route::get('/{id}', [ThemeController::class, 'show']);
    Route::put('/{id}', [ThemeController::class, 'update']);
    Route::delete('/{id}', [ThemeController::class, 'destroy']);
});
Route::prefix('tests')->group(function () {
    Route::get('/', [QuoteController::class, 'index']);
    Route::post('/', [QuoteController::class, 'store']);
    Route::get('/{id}', [QuoteController::class, 'show']);
    Route::put('/{id}', [QuoteController::class, 'update']);
    Route::delete('/{id}', [QuoteController::class, 'destroy']);
});