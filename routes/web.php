<?php

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
    return view('barberbarometer.index');
})->name('index');
Route::resource('/databarber', \App\Http\Controllers\DataBarberController::class);
Route::resource('/bookinglist',\App\Http\Controllers\BookingListController::class);
