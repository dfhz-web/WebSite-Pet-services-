<?php

namespace App\Http\Controllers;

use App\Models\Obtain;
use Illuminate\Http\Request;
use App\Http\Requests\StoreObtain;

class ObtainController extends Controller
{
    public function store(StoreObtain $request)
    {
          $obtains = Obtain::create($request->all());
       
           return view('livewire.module-status',compact('obtains'));

    }

}
