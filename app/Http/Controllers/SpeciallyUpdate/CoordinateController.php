<?php

namespace App\Http\Controllers\SpeciallyUpdate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assistance;
use App\Models\Provider;
use App\Http\Livewire\Coordinator;

class CoordinateController extends Controller
{
    /**
     * Display a listing of wthe resource.
     *
     * @return \Illuminwate\Http\Response
     */
    
    public function index(Assistance $assistance)
    {
       
        return view('specially.coordinations.index',compact('assistance'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('specially.coordinations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $providers = Provider::create($request->all());
        
        
        // $providerss = Provider::all()s;

   
        return view('specially.coordinations.index',compact('providers'));
    }

    /**
     * Display the specified resource.
     ****
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Provider $provider)
    {
        
    
        return view('specially.coordinations.show',compact('provider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Assistance $assistance, Provider $provider)
    {
        return view('specially.coordinations.edit',compact('provider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assistance $assistance, Provider $provider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assistance $assistance, Provider $provider)
    {
        //
    }

    public function index2()
    {
        $assistances = Assistance::all();

        
        return view('specially.coordinations.index2',compact('assistances'));
    }
}
