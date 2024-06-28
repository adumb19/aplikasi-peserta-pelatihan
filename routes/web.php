<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('login', [LoginController::class, 'index']);
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');
Route::get('register', [RegisterController::class, 'index']);

Route::resource('dashboard', DashboardController::class);