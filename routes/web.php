<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about-us', [HomeController::class, 'about'])->name('home.about');


Route::group(['prefix' => 'account'], function(){
    Route::get('/login', [AccountController::class, 'login'])->name('account.login');
    Route::post('/login', [AccountController::class, 'check_login']);

    Route::get('/register', [AccountController::class, 'register'])->name('account.register');
    Route::post('/register', [AccountController::class, 'check_register']);

    Route::get('/profile', [AccountController::class, 'profile'])->name('account.profile');
    Route::post('/profile', [AccountController::class, 'check_profile']);

    Route::get('/change-password', [AccountController::class, '/change-password'])->name('account.change-password');
    Route::post('/change-password', [AccountController::class, 'check_change-password']);

    Route::get('/forgot-password', [AccountController::class, '/forgot-password'])->name('account.forgot-password');
    Route::post('/forgot-password', [AccountController::class, 'check_forgot-password']);

    Route::get('/reset-password', [AccountController::class, '/reset-password'])->name('account.reset-password');
    Route::post('/reset-password', [AccountController::class, 'check_reset-password']);
    
    
});