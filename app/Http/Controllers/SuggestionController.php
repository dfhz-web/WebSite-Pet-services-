<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Suggestion;
use App\Models\Touch;
use App\Models\User;
use App\Http\Requests\StoreSuggestion;

class SuggestionController extends Controller
{
    
    public function indexcreate()
    {
        
        $suggestions = Suggestion::paginate();
        


        return view('suggestion.index',compact('suggestions'));
    }



    public function store(StoreSuggestion $request)
    {

    //    $touches = new Touch();

    //    $touches->name = $request->name;
    //    $touches->email = $request->email;
    //    $touches->requestt = $request->requestt;

    //    $touches->save();
       
       $touches = Touch::create($request->all());
       

       $suggestions = Suggestion::paginate();

       

       return view('suggestion.done',compact('touches','suggestions'));
    }

   



}
