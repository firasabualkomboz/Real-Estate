<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Manager\HomeController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'user-access:manager'])->prefix('manager')->group(function () {

    Route::get('/', [\App\Http\Controllers\Manager\HomeController::class, 'index']);

});

Route::middleware(['auth', 'user-access:owner'])->group(function () {

});

Route::middleware(['auth', 'user-access:tenant'])->group(function () {

});
