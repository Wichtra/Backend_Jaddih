<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Users\TransactionController;

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

// // User routes
// Route::middleware(['auth', 'user'])->group(function () {
//     Route::get('/dashboard', '')->name('user.dashboard');
//     // other user routes
// });

// // Admin routes
// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
//     // other admin routes
// });

// Public routes
Route::get('/', function () {
    return view('welcome');
})->name('home');