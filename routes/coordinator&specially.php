<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpeciallyUpdate\ModuleController;
use App\Http\Controllers\SpeciallyUpdate\CoordinateController;

Route::resource('speciallyupdate', ModuleController::class)->names('updates');






Route::resource('coordination', CoordinateController::class)->names('coordinations');
Route::get('index',[CoordinateController::class, 'index2'])->name('coordinate.index');

 
