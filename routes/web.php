<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;

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
Route::get('/', [PostController::class, 'index'])->middleware('login.middleware');

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'registerAction']);

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'loginAction'])->name('login');

Route::get('/logout', [AuthController::class, 'logoutAction']);

Route::get('/profile', [ProfileController::class, 'profile']);
Route::get('/edit-profile', [ProfileController::class, 'editProfile']);
Route::post('/edit-profile', [ProfileController::class, 'editProfileAction']);
