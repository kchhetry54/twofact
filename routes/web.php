<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('welcome');
});

//home
Route::get('/home', [FrontController::class, 'home'])->name('home');

//two-factor
Route::get('/two-factor-auth', [AuthController::class, 'TwoFact'])->name('twofactauth');

//profile
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/profile/clear', [ProfileController::class, 'clearImage'])->name('profile.clear');
Route::post('/profile/password', [ProfileController::class, 'password'])->name('profile.password');