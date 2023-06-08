<?php

use App\Http\Controllers\CustomUser;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [CustomUser::class, "index"])->name('register.form');
Route::post('/register', [CustomUser::class, "store"])->name('register');
Route::get('/login', [CustomUser::class, "loginForm"])->name('login.form');
Route::post('/login', [CustomUser::class, "login"])->name('login');

Route::get('/dashboard', function() {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

Route::post('/logout', [CustomUser::class, "logout"])->name('logout')->middleware('auth');


