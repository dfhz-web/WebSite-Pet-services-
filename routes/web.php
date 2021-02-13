<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModuleController;
use App\Http\Livewire\ModuleStatus;
use App\Models\Module;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\AssistanceController;


use App\Http\Controllers\tributary\PruebaController;
use App\Http\Controllers\tributary\ClientController;


Route::get('/',HomeController::class)->name('home');


Route::get('about-us',AboutusController::class)->name('aboutus');

Route::resource('posts', PostController::class);

Route::get('category/{category})',[PostController::class ,'category'])->name('posts.category');

Route::get('tag/{tag}',[PostController::class, 'tag'])->name('posts.tag');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
     return view('dashboard');
})->name('dashboard');



Route::get('modules',[ModuleController::class,'index'])->name('modules.index');

Route::get('modules/{module}',[ModuleController::class,'show'])->name('modules.show');

Route::post('modules/{module}/getting',[ModuleController::class,'getting'])->middleware('auth')->name('modules.getting');



// Route::get('status-now-module/{module}',ModuleStatus::class)->name('modules.status');
// Route::get('status-now-module/{module}',[ModuleController::class,'status'])->name('modules.status');

// use livewire like controller
Route::get('status-now-module/{module}',ModuleStatus::class)->name('modules.status')->middleware('auth');

//contactus

Route::get('suggestions',[SuggestionController::class,'indexcreate'])->name('suggestions.indexcreate');

Route::post('suggestions',[SuggestionController::class,'store'])->name('suggestions.store');


// Route::get('suggestions/create',[SuggestionController::class,'create'])->name('suggestions.create');

Route::get('suggestions/{suggestion}',[SuggestionController::class,'show'])->name('suggestions.show');


Route::post('assistance/{user}',[AssistanceController::class,'store'])->name('assistance.store');






    




// Route::get('suggestions/{suggestion}/{shape?}', function ($suggestion, $shape = null) {
//     if($shape)
//     {
//      return "Welcome to the suggestion $suggestion, of the category of $shape";
//     }
//     else{
//      return "welcome to possible suggestions $suggestion";
//     }
    
    
// });


Route::get('/prueba',[PruebaController::class, 'index'])->name('prueba.index');

Route::get('/pruebashow',[PruebaController::class, 'show'])->name('prueba.show');

Route::post('/prueba/create',[PruebaController::class, 'create'])->name('prueba.create');

Route::get('/prueba/{id}/edit',[PruebaController::class, 'showedit'])->name('prueba.edit');

Route::put('/prueba/{id}/update',[PruebaController::class, 'update'])->name('prueba.update');

Route::delete('/prueba/{id}/destroy',[PruebaController::class, 'destroy'])->name('prueba.destroy');





Route::get('/client',[ClientController::class, 'index'])->name('client.index');

Route::get('/client-show',[ClientController::class, 'show'])->name('client.show');

Route::post('/client/create',[ClientController::class, 'create'])->name('client.create');

Route::get('/client/{id}/edit',[ClientController::class, 'showedit'])->name('client.edit');

Route::put('/client/{id}/update',[ClientController::class, 'update'])->name('client.update');

Route::delete('/client/{id}/destroy',[ClientController::class, 'destroy'])->name('client.destroy');






