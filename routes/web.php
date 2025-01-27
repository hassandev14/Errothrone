<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\userController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/signup', [userController::class, 'signup_view']);
Route::get('/login', [userController::class, 'login_view'])->name('login');

Route::post('/signup', [userController::class, 'signup']);
Route::post('/login', [userController::class, 'login']);
Route::get('/logout', [userController::class, 'logout'])->name('logout');
