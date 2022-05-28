<?php

use App\Models\Estate;
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

Route::get('/', [\App\Http\Controllers\front\GeneralController::class, 'index'])->name('welcome');
Route::get('/estate{id}', [\App\Http\Controllers\front\GeneralController::class, 'showEstate'])->name('showEstate');
Route::get('/support', [\App\Http\Controllers\front\GeneralController::class, 'support'])->name('support');
Route::get('/apartment/{id}', [\App\Http\Controllers\front\GeneralController::class, 'showApartment'])->name('showApartment');


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth', 'IsOwner']);

Route::middleware(['auth', 'IsManager'])->prefix('manager')->name('manager.')->group(function () {

    Route::get('/', [\App\Http\Controllers\Manager\HomeController::class, 'index'])->name('home');
    Route::resource('appointments', \App\Http\Controllers\Manager\AppointmentController::class);
    Route::resource('properties', \App\Http\Controllers\Manager\PropertyController::class);
    Route::resource('estates', \App\Http\Controllers\Manager\EstateController::class);
    Route::resource('owners', \App\Http\Controllers\Manager\OwnerController::class);
    Route::resource('tenants', \App\Http\Controllers\Manager\TenantController::class);
    Route::resource('apartments', \App\Http\Controllers\Manager\ApartmentController::class);
    Route::resource('contracts', \App\Http\Controllers\Manager\ContractController::class);
    Route::get('getEstate/{id}', [\App\Http\Controllers\Manager\ContractController::class , 'getEstate']);

});

Route::middleware(['auth', 'IsOwner'])->prefix('owner')->name('owner.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Owner\HomeController::class, 'index'])->name('home');
});

Route::middleware(['auth', 'IsTenant'])->name('tenant.')->prefix('tenant')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'tenantHome'])->name('home');
    Route::post('/makeAppointment', [\App\Http\Controllers\front\GeneralController::class, 'makeAppointment'])->name('makeAppointment');
    Route::get('/appointment-list', [App\Http\Controllers\HomeController::class, 'appointmentList'])->name('appointmentList');
    Route::resource('appointments', \App\Http\Controllers\Tenant\AppointmentController::class);

});


