<?php

use App\Http\Controllers\ReservationsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ReservationsController::class, 'index'])->name('index');
Route::post('/store', [ReservationsController::class, 'store'])->name('store');
Route::get('/migrate', function () {
  \Artisan::call('migrate');
  return 'Migration run successfully!';
});