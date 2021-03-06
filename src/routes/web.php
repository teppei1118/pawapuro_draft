<?php

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

Route::get('/', function () {
    return view('start-draft');
});

Route::post('register', [\App\Http\Controllers\LoginController::class, 'register'])->name('register');
Route::post('', [\App\Http\Controllers\LoginController::class, 'login'])->name('');