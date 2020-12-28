<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModuleController;
use App\Models\Module;

Route::get('/',HomeController::class)->name('home');

Route::resource('posts', PostController::class);

Route::get('category/{category})',[PostController::class ,'category'])->name('posts.category');

Route::get('tag/{tag}',[PostController::class, 'tag'])->name('posts.tag');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
     return view('dashboard');
})->name('dashboard');

Route::get('modules',[ModuleController::class,'index'])->name('modules.index');



Route::get('modules/{module}',[ModuleController::class,'show'])->name('modules.show');

