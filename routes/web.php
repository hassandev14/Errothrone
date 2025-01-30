<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\userController;
use App\Http\Controllers\CategoryController;
use App\Http\Middleware\CheckUserSession;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\ProductsController;

// Unauthenticated Routes
// These routes are for users who are not logged in or do not have a valid session.
// They provide access to the signup, login, and logout functionality.

Route::get('/signup', [userController::class, 'signup_view']); // Displays signup form
Route::get('/login', [userController::class, 'login_view'])->name('login'); // Displays login form

Route::post('/signup', [userController::class, 'signup']); // Handles signup form submission
Route::post('/login', [userController::class, 'login']); // Handles login form submission
Route::get('/logout', [userController::class, 'logout'])->name('logout'); // Logs out the user


Route::middleware(CheckUserSession::class)->group(function () {

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

/////////////////////////////////////////////////  CATEGORY ROUTES   //////////////////////////////////////////////////////////
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

/////////////////////////////////////////////////  BRANDS ROUTES   //////////////////////////////////////////////////////////
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

// Delete Brand 
Route::get('/brand/{id}', [BrandsController::class, 'destroy'])->name('brands.delete');

/////////////////////////////////////////////////  PRODUCT ROUTES   //////////////////////////////////////////////////////////
// Show all product
Route::get('/product', [ProductsController::class, 'index'])->name('products.index');

// Show Add product Form
Route::get('/product/create', [ProductsController::class, 'create'])->name('products.create');

// Store product
Route::post('/product/store', [ProductsController::class, 'store'])->name('products.store');

// Show Edit product Form
Route::get('/product/{id}/edit', [ProductsController::class, 'edit'])->name('products.edit');

// Update product
Route::put('/product/{id}', [ProductsController::class, 'update'])->name('products.update');

// Delete product 
Route::get('/product/{id}', [ProductsController::class, 'destroy'])->name('products.delete');
});
