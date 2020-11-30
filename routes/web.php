<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'showDashboard'])->name('admin.dashboard');
//    Route::prefix('users')->group(function () {
//        Route::get('/', [UserController::class, 'index'])->name('user.index');
//        Route::get('/create', [UserController::class, 'create'])->name('user.create');
//        Route::post('/create', [UserController::class, 'store'])->name('user.store');
//        Route::get('/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
//        Route::post('/{id}/edit', [UserController::class, 'update'])->name('user.update');
//        Route::post('/{id}/change-status', [UserController::class, 'changeStatus'])->name('user.changeStatus');
//        Route::get('/{id}/destroy', [UserController::class, 'destroy'])->name('user.destroy');
//    });
});
