<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;

Route::get('', [HomeController::class, 'index'])->name('home');
// middleware(['auth:sanctum', 'verified'])

Route::resource('role', RoleController::class)->names('roles');