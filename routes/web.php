<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\userController;
use App\Http\Controllers\CategoryController;
use App\Http\Middleware\CheckUserSession;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\Order_itemsController;
use App\Http\Controllers\orderReturnController;
use App\Http\Controllers\cartCpntroller;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\stockController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\frontendController;




Route::get('/', [frontendController::class, 'index'])->name('home');
Route::get('/about', [frontendController::class, 'about'])->name('about');
Route::get('/store', [frontendController::class, 'store'])->name('store');
Route::get('/contact', [frontendController::class, 'contact'])->name('contact');

Route::get('/signup', [userController::class, 'signup_view']); // Displays signup form
Route::get('/login', [userController::class, 'login_view'])->name('login'); // Displays login form

Route::post('/signup', [userController::class, 'signup']); // Handles signup form submission
Route::post('/login', [userController::class, 'login']); // Handles login form submission
Route::get('/logout', [userController::class, 'logout'])->name('logout'); // Logs out the user


// Route::middleware(CheckUserSession::class)->group(function () {
Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');
/////////////////////////////////////////////////  CATEGORY ROUTES   //////////////////////////////////////////////////////////
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/add_category', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{id}/update', [CategoryController::class, 'update'])->name('categories.update');
Route::get('/categories/{id}/delete', [CategoryController::class, 'destroy'])->name('categories.delete');
/////////////////////////////////////////////////  BRANDS ROUTES   //////////////////////////////////////////////////////////
Route::get('/brand', [BrandsController::class, 'index'])->name('brands.index');
Route::get('/brand/create', [BrandsController::class, 'create'])->name('brands.create');
Route::post('/brand/store', [BrandsController::class, 'store'])->name('brands.store');
Route::get('/brand/{id}/edit', [BrandsController::class, 'edit'])->name('brands.edit');
Route::put('/brand/{id}', [BrandsController::class, 'update'])->name('brands.update');
Route::get('/brand/{id}', [BrandsController::class, 'destroy'])->name('brands.delete');
/////////////////////////////////////////////////  PRODUCT ROUTES   //////////////////////////////////////////////////////////
Route::get('/product', [ProductsController::class, 'index'])->name('products.index');
Route::get('/product/create', [ProductsController::class, 'create'])->name('products.create');
Route::post('/product/store', [ProductsController::class, 'store'])->name('products.store');
Route::get('/product/{id}/edit', [ProductsController::class, 'edit'])->name('products.edit');
Route::put('/product/{id}', [ProductsController::class, 'update'])->name('products.update');
Route::get('/product/{id}', [ProductsController::class, 'destroy'])->name('products.delete');
Route::get('/stocks', [stockController::class, 'index'])->name('stocks.index');
/////////////////////////////////////////////////  ORDERS ROUTES   //////////////////////////////////////////////////////////
Route::get('/orders', [OrdersController::class, 'index'])->name('orders.index');
Route::get('/orders/{id}', [OrdersController::class, 'destroy'])->name('orders.delete');
Route::get('/order_returns', [orderReturnController::class, 'index'])->name('order_returns.index');
/////////////////////////////////////////////////  ORDERS ITEM ROUTES   //////////////////////////////////////////////////////////
Route::get('/order_items', [Order_itemsController::class, 'index'])->name('orders_item.index');
Route::get('/orders_items/{id}', [Order_itemsController::class, 'destroy'])->name('orders_item.delete');
/////////////////////////////////////////////////  ORDERS ITEM ROUTES   //////////////////////////////////////////////////////////
Route::get('/carts', [cartCpntroller::class, 'index'])->name('carts.index');
Route::get('/cart/{id}', [cartCpntroller::class, 'destroy'])->name('carts.delete');
/////////////////////////////////////////////////  ORDERS ITEM ROUTES   //////////////////////////////////////////////////////////
Route::get('/payments', [PaymentsController::class, 'index'])->name('payments.index');
Route::get('/payments/{id}', [PaymentsController::class, 'destroy'])->name('payments.delete');
/////////////////////////////////////////////////  ORDERS ITEM ROUTES   //////////////////////////////////////////////////////////
Route::get('/sub_categories', [SubCategoryController::class, 'index'])->name('sub_categories.index');
Route::get('/sub_categories/create', [SubCategoryController::class, 'create'])->name('sub_categories.create');
Route::post('/add_sub_categories', [SubCategoryController::class, 'store'])->name('sub_categories.store');

// });
