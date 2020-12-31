<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Suggestion;

class SuggestionController extends Controller
{
    public function index()
    {
        $suggestions = Suggestion::paginate();
        
        return view('suggestion.index',compact('suggestions'));
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
