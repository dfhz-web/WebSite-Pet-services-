<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;

class HomeController extends Controller
{
    public function __invoke()
    {
        $modules = Module::where('status', '3')->latest('id')->get()->take(12);
      
        // return Module::find(2)->rating;
        return view('welcome', compact('modules'));
    }
}
