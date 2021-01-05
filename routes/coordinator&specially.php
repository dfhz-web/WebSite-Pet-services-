<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CoordinationspeciallyModules;
use App\Http\Livewire\CoordinationspeciallyCases;


Route::get('Modules', CoordinationspeciallyModules::class)->name('Coordinatorm.modules.index');



Route::get('Cordinating', CoordinationspeciallyCases::class)->name('Coordinatorc.modules.index');