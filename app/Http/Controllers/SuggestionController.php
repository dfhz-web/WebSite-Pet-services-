<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Suggestion;
use App\Models\Touch;
use App\Models\User;

class SuggestionController extends Controller
{
    protected $done;
    public function indexcreate()
    {
        $suggestions = Suggestion::paginate();


        return view('suggestion.index',compact('suggestions'));
    }



    public function store(Request $request)
    {
       $touches = new Touch();

       $touches->name = $request->name;
       $touches->email = $request->email;
       $touches->requestt = $request->requestt;

       $touches->save();

       $suggestions = Suggestion::paginate();

       

       return view('suggestion.done',compact('touches','suggestions'));
    }

   



}
