<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assistance;

class AssistanceController extends Controller
{
    public function store(Request $request)
    {
        $assistances = Assistance::create($request->all());
        return view('suggestion.done',compact('assistances'));
    }

    
}
