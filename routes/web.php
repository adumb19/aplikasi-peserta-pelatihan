<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GelombangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('login', [LoginController::class, 'index']);
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');
Route::get('register', [RegisterController::class, 'index']);

// Route::middleware('auth')->group(function() {
//     Route::resource('dashboard', DashboardController::class);
// });

Route::resource('dashboard', DashboardController::class);
Route::resource('level', LevelController::class);
Route::resource('jurusan', JurusanController::class);
Route::resource('gelombang', GelombangController::class);
Route::resource('peserta', PesertaController::class);
Route::resource('user', UserController::class);

