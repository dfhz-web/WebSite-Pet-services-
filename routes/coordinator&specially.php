<?php

use App\Http\Livewire\Coordinator;
use App\Http\Livewire\SpeciallyUpdate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpeciallyUpdate\ModuleController;
use App\Http\Controllers\SpeciallyUpdate\CoordinateController;
use App\Http\Controllers\SpeciallyUpdate\ExtraCoordinateController;

// Route::get('employed', SpeciallyUpdate::class)->middleware('can:Create modules','can:Read modules','can:Update modules','can:Delete modules')->name('speciallyUpdate.index');
Route::resource('speciallyupdate', ModuleController::class)->names('updates');






/// Route::get('coordinations',Coordinator::class)->middleware('can:Read modules','can:Update modules','can:Coordinate modules')->name('coordinator.index');
Route::resource('coordination', CoordinateController::class)->names('coordinations');
Route::get('index',[CoordinateController::class, 'index2'])->name('coordinate.index');

// Route::get('get/provider/{assistance}', [ProviderController::class,'index'])->name('providers.index');
// Routew::post('send-new-provider/', [ProviderController::class,'store'])->name('providers.store');
 
