<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Frontend routes
require __DIR__.'/frontend/frontend.php';

// other routes

Route::controller(AuthController::class)->group(function (){
    Route::get('/login', 'LoginPage')->middleware('guest')->name('login');
    Route::get('/signup', 'SignupPage')->middleware('guest')->name('signup');
    Route::post('register', 'register')->name('register.post');
    Route::post('login', 'login')->name('login.post');
    Route::get('logout', 'logout');
    Route::get('auth/github', 'gitRedirect')->name('github.login');
    Route::get('auth/github/callback', 'gitCallback');
});

