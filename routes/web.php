<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Route::get('/', \App\Livewire\Home::class)->name('home');
Route::get('/', function () {
    return view('dashboard');
});

// Route::get('/login', [AuthController::class, 'index'])->name('auth.login')->middleware('guest');
// Route::post('/login', [AuthController::class, 'verify'])->name('auth.verify');


// Route::group(['middleware'=>'auth:admin'], function(){
    Route::get('/admin/home', [AdminDashboardController::class, 'index'])->name('admin.dashboard.index');
// });

// Route::group(['middleware'=>'auth:user'], function(){
    Route::get('/user/home', [UserDashboardController::class, 'index'])->name('user.dashboard.index');
// });

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
