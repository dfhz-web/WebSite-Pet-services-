<?php

use App\Http\Livewire\Coordinator;
use App\Http\Livewire\SpeciallyUpdate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpeciallyUpdate\ModuleController;
use App\Http\Controllers\SpeciallyUpdate\CoordinateController;



// Route::get('employed', SpeciallyUpdate::class)->middleware('can:Create modules','can:Read modules','can:Update modules','can:Delete modules')->name('speciallyUpdate.index');
Route::resource('user', ModuleController::class)->names('modules');






// Route::get('coordinations',Coordinator::class)->middleware('can:Read modules','can:Update modules','can:Coordinate modules')->name('coordinator.index');
Route::resource('user', CoordinateController::class)->names('coordinations');
// Route::get('get/provider/{assistance}', [ProviderController::class,'index'])->name('providers.index');
// Route::post('send-new-provider/', [ProviderController::class,'store'])->name('providers.store');
    
