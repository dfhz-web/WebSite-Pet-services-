<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Suggestion;

class SuggestionController extends Controller
{
    public function index()
    {
        return view('suggestion.index');
    }
    public function create()
    {
        return view('suggestion.index');
    }
    public function show($suggestion)
    {
        return view('suggestion.index',compact('suggestion'));
    }

}
