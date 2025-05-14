<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;

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
    return view('home');
});

Route::get('cooking', function () {
    return view('cooking');
});

Route::get('login', function () {
    return view('login');
})->name('login');

Route::view('register', 'register')->name('register');
Route::post('register', RegisterController::class)->name('register.store');

Route::post('login', LoginController::class)
    ->middleware('throttle:5,1')
    ->name('login.attempt');

Route::post('logout', function () {
    Auth::guard('web')->logout();

    Session::invalidate();
    Session::regenerateToken();

    return redirect('/');
})->name('logout');

Route::view('create', 'create')->name('create');

Route::resource('products', ProductController::class)
    ->middleware('auth');

Route::get('show', function () {
    return view('show');
});