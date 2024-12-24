<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PricelistController;
use App\Http\Controllers\AppointmentController;


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

Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/onlinebook', function () {
    return view('onbook');
});


Route::get('/', [ServiceController::class, 'index'])->name('home');
Route::post('/inputulasan', [UlasanController::class, 'input'])->name('input.ulasan');
Route::post('/inputser', [ServiceController::class, 'store'])->name('input.ser');
Route::post('/inputprice', [PricelistController::class, 'store'])->name('input.price');
Route::post('/appointment', [AppointmentController::class, 'store'])->name('input.appointment');
Route::get('/appointment', [AppointmentController::class, 'create']);
Route::post('/appointments/get-available-barbers', [AppointmentController::class, 'getAvailableBarbers']);