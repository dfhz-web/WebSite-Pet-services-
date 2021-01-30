<?php

use App\Http\Controllers\BackupController;
use App\Http\Controllers\speciallyupdate\assignmentAnswere;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpeciallyUpdate\ModuleController;
use App\Http\Controllers\SpeciallyUpdate\CoordinateController;
use App\Http\Livewire\ResultAssistance;
use App\Http\Livewire\Specially\ModuleExactly;
// use App\Http\Controllers\SpeciallyUpdate\blog;
use App\Http\Controllers\SpeciallyUpdate\CategoryController;

Route::resource('modules', ModuleController::class)->names('updates');
Route::get('modules/{module}/exactly',ModuleExactly::class)->name('updates.exactly');









Route::resource('assistances', CoordinateController::class)->names('coordinations');
Route::get('provider/{provider}/{assistance}/checkout',[CoordinateController::class, 'checkProvider'])->name('providers.checkProvider');
Route::get('provider/{provider}/{assistance}/edit',[CoordinateController::class, 'editProvider'])->name('providers.editProvider');
Route::put('provider/{provider}/{assistance}/update',[CoordinateController::class, 'updateProvider'])->name('providers.updateProvider');
Route::get('providershow/show',[CoordinateController::class, 'showProvider'])->name('providers.showProvider');

Route::get('provider/{provider}/{assistance}/give',[assignmentAnswere::class, 'store'])->name('providers.assistances.give');


Route::resource('categories', CategoryController::class)->names('categories');




 
