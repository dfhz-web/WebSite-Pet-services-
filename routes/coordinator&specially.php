<?php

use App\Http\Livewire\Coordinator;
use App\Http\Livewire\SpeciallyUpdate;
use Illuminate\Support\Facades\Route;



Route::get('employed', SpeciallyUpdate::class)->middleware('can:Create modules','can:Read modules','can:Update modules','can:Delete modules')->name('speciallyUpdate.index');



Route::get('Cordinating',Coordinator::class)->middleware('can:Read modules','can:Update modules','can:Coordinate assistances')->name('coordinator.index');