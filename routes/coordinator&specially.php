<?php

use App\Http\Controllers\BackupController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpeciallyUpdate\ModuleController;
use App\Http\Controllers\SpeciallyUpdate\CoordinateController;

Route::resource('modules', ModuleController::class)->names('updates');







Route::resource('assistances', CoordinateController::class)->names('coordinations');


 
