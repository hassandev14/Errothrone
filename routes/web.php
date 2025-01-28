<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\userController;
use App\Http\Controllers\CategoriesController;
use App\Http\Middleware\CheckUserSession;
use App\Http\Controllers\BrandsController;


Route::middleware(CheckUserSession::class)->group(function () {
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/category', [CategoriesController::class, 'index'])->name('dashboard');
Route::get('/add_category', [CategoriesController::class, 'create'])->name('add_category');
Route::get('/update_category', [CategoriesController::class, 'edit'])->name('update_category');

Route::get('/barnd', [BrandsController::class, 'index'])->name('dashboard');
Route::get('/add_brand', [BrandsController::class, 'create'])->name('add_brand');
Route::get('/update_brand', [BrandsController::class, 'edit'])->name('update_brand');
});

Route::get('/signup', [userController::class, 'signup_view']);
Route::get('/login', [userController::class, 'login_view'])->name('login');

Route::post('/signup', [userController::class, 'signup']);
Route::post('/login', [userController::class, 'login']);
Route::get('/logout', [userController::class, 'logout'])->name('logout');
