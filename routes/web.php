<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModuleController;
use App\Http\Livewire\ModuleStatus;
use App\Models\Module;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\AboutusController;

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
Route::get('status-now-module/{module}',ModuleStatus::class)->name('modules.status');

//contactus

Route::get('suggestions',[SuggestionController::class,'indexcreate'])->name('suggestions.indexcreate');

Route::post('suggestions',[SuggestionController::class,'store'])->name('suggestions.store');


// Route::get('suggestions/create',[SuggestionController::class,'create'])->name('suggestions.create');

Route::get('suggestions/{suggestion}',[SuggestionController::class,'show'])->name('suggestions.show');



// Route::get('suggestions/{suggestion}/{shape?}', function ($suggestion, $shape = null) {
//     if($shape)
//     {
//      return "Welcome to the suggestion $suggestion, of the category of $shape";
//     }
//     else{
//      return "welcome to possible suggestions $suggestion";
//     }
    
    
// });