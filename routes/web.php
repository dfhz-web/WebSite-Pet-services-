<?php


use Illuminate\Support\Facades\Route;

use GuzzleHttp\Client;


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

Route::get('/client/{item}/edit',[ClientController::class, 'showedit'])->name('client.edit');

Route::put('/client/{item}/update',[ClientController::class, 'update'])->name('client.update');

Route::delete('/client/{item}/destroy',[ClientController::class, 'destroy'])->name('client.destroy');


Route::get('guzzle',function(){



     

     $client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'http://186.80.212.253:8081/api/',
    // You can set any number of default request options.
    'timeout'  => 2.0,
     ]);

     $response = $client->request('GET', 'Cliente');

     // dd($response->getBody()->getContents());
     return json_decode($response->getBody()->getContents());




   return "well done";
});



