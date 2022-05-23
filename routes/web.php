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

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth', 'IsOwner']);

Route::middleware(['auth', 'IsManager'])->prefix('manager')->name('manager.')->group(function () {

    Route::get('/', [\App\Http\Controllers\Manager\HomeController::class, 'index'])->name('home');
    Route::resource('appointments', \App\Http\Controllers\Manager\AppointmentController::class);

});

Route::middleware(['auth', 'IsOwner'])->prefix('owner')->name('owner.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Owner\HomeController::class, 'index'])->name('home');
});

Route::middleware(['auth', 'IsTenant'])->name('tenant.')->prefix('tenant')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'tenantHome'])->name('home');
    Route::get('/IsTenant', function () {
        return "wow this is a tenant";
    });
});


