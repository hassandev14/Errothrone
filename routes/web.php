<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\userController;
use App\Http\Controllers\CategoryController;
use App\Http\Middleware\CheckUserSession;
use App\Http\Controllers\BrandsController;


Route::middleware(CheckUserSession::class)->group(function () {
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
<<<<<<< HEAD

//  CATEGORY ROUTES
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/add_category', [CategoryController::class, 'create'])->name('add_category');
Route::get('/update_category', [CategoryController::class, 'edit'])->name('update_category');
Route::post('/add_category', [CategoryController::class, 'store'])->name('add_category');
Route::post('/update_category', [CategoryController::class, 'update'])->name('update_category');
Route::get('edit_category/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::get('delete_category/{id}', [CategoryController::class, 'edit'])->name('categories.delete');
=======
Route::get('/category', [CategoriesController::class, 'index'])->name('dashboard');
Route::get('/add_category', [CategoriesController::class, 'create'])->name('add_category');
Route::get('/update_category', [CategoriesController::class, 'edit'])->name('update_category');

Route::get('/barnd', [BrandsController::class, 'index'])->name('dashboard');
Route::get('/add_brand', [BrandsController::class, 'create'])->name('add_brand');
Route::get('/update_brand', [BrandsController::class, 'edit'])->name('update_brand');
>>>>>>> ee6f145e2e2808243ef388912a3d0b1781e4ff08
});

Route::get('/signup', [userController::class, 'signup_view']);
Route::get('/login', [userController::class, 'login_view'])->name('login');

Route::post('/signup', [userController::class, 'signup']);
Route::post('/login', [userController::class, 'login']);
Route::get('/logout', [userController::class, 'logout'])->name('logout');
