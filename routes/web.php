<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', \App\Livewire\Home::class)->name('home');
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::get('/login', [AuthController::class, 'verify'])->name('auth.verify');


Route::group(['middleware'=>'auth:admin'], function(){
    Route::get('/admin/home', [DashboardController::class, 'index'])->name('admin.dashboard.index');
});

Route::group(['middleware'=>'auth:user'], function(){
    Route::get('/user/home', [DashboardController::class, 'index'])->name('user.dashboard.index');
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
