<?php

use App\Http\Livewire\Coordinator;
use App\Http\Livewire\SpeciallyUpdate;
use Illuminate\Support\Facades\Route;



Route::get('Modules', SpeciallyUpdate::class)->name('SpeciallyUpdate.index');



Route::get('Cordinating',Coordinator::class)->name('Coordinator.index');