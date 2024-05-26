<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Users\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Users\PlaceController;
use App\Http\Controllers\Users\TiketController;
use App\Http\Controllers\Users\ReviewController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Users\TransactionController;
use App\Http\Controllers\Admin\CategoryManagementController;
use App\Http\Controllers\Admin\PlaceRecommendationController;
use App\Http\Controllers\Admin\ReviewManagementController;
use App\Http\Controllers\Admin\TiketManagementController;
use App\Http\Controllers\Admin\TransactionManagementController;

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

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware(['auth:sanctum']);

Route::prefix('user')->group(function () {
    Route::post('/register', [UserController::class, 'store']);
    Route::get('/show', [UserController::class, 'showAll']);
});

Route::prefix('place')->group(function () {
    Route::get('/', [PlaceController::class, 'index']);
    Route::post('/', [PlaceController::class, 'store']);
    Route::get('/{id}', [PlaceController::class, 'show']);
});

Route::prefix('review')->group(function () {
    Route::get('/', [ReviewController::class, 'index']);
});

Route::prefix('tiket')->group(function () {
    Route::get('/', [TiketController::class, 'index']);
});

Route::prefix('transaction')->group(function () {
    Route::get('/', [TransactionController::class, 'index'])->middleware(['auth:sanctum']);
    Route::get('/{id}', [TransactionController::class, 'show'])->middleware(['auth:sanctum']);
    Route::post('/', [TransactionController::class, 'store'])->middleware(['auth:sanctum']);
});



// ===============================Admin===============================
Route::prefix('admin')->group(function () {
    Route::get('/category', [CategoryManagementController::class, 'index']);
    Route::post('/category', [CategoryManagementController::class, 'store']);
    Route::put('/category/{id}', [CategoryManagementController::class, 'update']);
    Route::delete('/category/{id}', [CategoryManagementController::class, 'destroy']);

    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/place', [PlaceRecommendationController::class, 'index']);
    Route::post('/place', [PlaceRecommendationController::class, 'store']);
    Route::get('/place/{id}', [PlaceRecommendationController::class, 'show']);
    Route::put('/place/{id}', [PlaceRecommendationController::class, 'update']);
    Route::delete('/place/{id}', [PlaceRecommendationController::class, 'destroy']);

    Route::get('/review', [ReviewManagementController::class, 'index']);
    Route::delete('/review/{id}', [ReviewManagementController::class, 'destroy']);

    Route::get('/tiket', [TiketManagementController::class, 'index']);
    Route::put('/tiket/{id}', [TiketManagementController::class, 'update']);
    Route::delete('/tiket/{id}', [TiketManagementController::class, 'destroy']);

    Route::get('/transaction', [TransactionManagementController::class, 'index']);
    Route::get('/transaction/{id}', [TransactionManagementController::class, 'show']);
    Route::delete('/transaction/{id}', [TransactionManagementController::class, 'destroy']);
});
