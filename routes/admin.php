<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ManagementuserController;
use GuzzleHttp\Middleware;
use App\Http\Controllers\Admin\KindController;
use App\Http\Controllers\Admin\PriceController;

Route::get('', [HomeController::class, 'index'])->Middleware('can:Admin-dashboard')->name('home');
// middleware(['auth:sanctum', 'verified'])

Route::resource('role', RoleController::class)->names('roles');

Route::resource('users',ManagementuserController::class)->names('users');

Route::resource('kinds', KindController::class)->names('kinds');

Route::resource('prices', PriceController::class)->names('prices');