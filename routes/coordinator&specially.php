<?php

use App\Http\Controllers\BackupController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpeciallyUpdate\ModuleController;
use App\Http\Controllers\SpeciallyUpdate\CoordinateController;

Route::resource('modules', ModuleController::class)->names('updates');







Route::resource('assistances', CoordinateController::class)->names('coordinations');
Route::get('provider/{provider}/checkout',[CoordinateController::class, 'checkProvider'])->name('providers.checkProvider');
Route::get('provider/{provider}/edit',[CoordinateController::class, 'editProvider'])->name('providers.editProvider');
Route::put('provider/{provider}/update',[CoordinateController::class, 'updateProvider'])->name('providers.updateProvider');
Route::get('providershow/show',[CoordinateController::class, 'showProvider'])->name('providers.showProvider');



 
