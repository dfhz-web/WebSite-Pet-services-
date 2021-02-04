<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

Route::get('{module}/checkout', [PaymentController::class,'checkout'])->name('checkout');
Route::get('{module}/pay', [PaymentController::class,'pay'])->name('pay');

