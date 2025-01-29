<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\userController;
use App\Http\Controllers\CategoryController;
use App\Http\Middleware\CheckUserSession;
use App\Http\Controllers\BrandsController;


Route::middleware(CheckUserSession::class)->group(function () {

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

//  CATEGORY ROUTES
// List Categories
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

// Show Add Category Form
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');

// Store Category
Route::post('/add_category', [CategoryController::class, 'store'])->name('categories.store');

// Show Edit Category Form
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');

// Update Category
Route::put('/categories/{id}/update', [CategoryController::class, 'update'])->name('categories.update');

// Delete Category
Route::get('/categories/{id}/delete', [CategoryController::class, 'destroy'])->name('categories.delete');

// Show all brands
Route::get('/brand', [BrandsController::class, 'index'])->name('brands.index');

// Show Add Brand Form
Route::get('/brand/create', [BrandsController::class, 'create'])->name('brands.create');

// Store Brand
Route::post('/brand/store', [BrandsController::class, 'store'])->name('brands.store');

// Show Edit Brand Form
Route::get('/brand/{id}/edit', [BrandsController::class, 'edit'])->name('brands.edit');

// Update Brand
Route::put('/brand/{id}', [BrandsController::class, 'update'])->name('brands.update');

// Delete Brand (Using DELETE instead of GET)
Route::get('/brand/{id}', [BrandsController::class, 'destroy'])->name('brands.delete');


});

Route::get('/signup', [userController::class, 'signup_view']);
Route::get('/login', [userController::class, 'login_view'])->name('login');

Route::post('/signup', [userController::class, 'signup']);
Route::post('/login', [userController::class, 'login']);
Route::get('/logout', [userController::class, 'logout'])->name('logout');
