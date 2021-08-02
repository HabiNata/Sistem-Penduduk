<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DataPendudukController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('penduduk', DataPendudukController::class);

// Page login sebagai index web;
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');

// Diable regitrasi user, verify email, dan reset password;
Auth::routes(['register' => false, 'verify' => false, 'reset' => false]);

// Page Home setelah login;
Route::get('/home', [HomeController::class, 'index'])->name('home');
