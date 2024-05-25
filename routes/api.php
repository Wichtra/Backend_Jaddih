<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Users\PlaceController;
use App\Http\Controllers\Users\TiketController;
use App\Http\Controllers\Users\ReviewController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Users\TransactionController;
use App\Http\Controllers\Admin\CategoryManagementController;
use App\Http\Controllers\Admin\PlaceRecommendationController;

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

Route::prefix('user')->group(function () {
    Route::post('/login', [UserController::class, 'index']);
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
    Route::get('/', [TransactionController::class, 'index']);
    Route::get('/{id}', [TransactionController::class, 'show']);
    Route::post('/', [TransactionController::class, 'store']);
});

// ============================================================
// Route::prefix('admin')->group(function () {
//     Route::get('/{id}', [AdminController::class, 'show']);
// });



Route::resource('category', CategoryManagementController::class);

// ============================Admin===========================
Route::get('/places', [PlaceRecommendationController::class, 'index']);
Route::post('/places', [PlaceRecommendationController::class, 'store']);
Route::get('/places/{id}', [PlaceRecommendationController::class, 'show']);
Route::put('/places/{id}', [PlaceRecommendationController::class, 'update']);
Route::delete('/places/{id}', [PlaceRecommendationController::class, 'destroy']);
