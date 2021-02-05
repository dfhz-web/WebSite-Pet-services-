<?php

namespace App\Http\Controllers\SpeciallyUpdate;

use App\Http\Controllers\AssistanceController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assistance;
use App\Models\Provider;
use App\Http\Livewire\Coordinator;
use App\Http\Requests\StoreCoordinate;

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
    public function store(StoreCoordinate $request)
    {
   


       
        $provider = Provider::create($request->all());
       


        return view('specially.coordinations.showProvider',compact('provider'));
       
        
        
        
        

    }

    /**
     * Display the specified resource.
     ****
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Assistance $assistance)
    {
        
    
        return view('specially.coordinations.show',compact('assistance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function checkProvider(Provider $provider,Assistance $assistance)
    {

        return view('specially.coordinations.check',compact('provider','assistance'));
    }

    public function editProvider(Provider $provider,Assistance $assistance)
    {
        return view('specially.coordinations.edit',compact('provider','assistance'));


    }

    public function showProvider()
    {
        $providers = Provider::all();
        return view('specially.coordinations.showProvider',compact('providers'));
    }


    public function edit()
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function updateProvider(Request $request, Provider $provider, Assistance $assistance)
    {
        $provider->update($request->all());
        return view('specially.coordinations.edit',compact('provider','assistance'));
    
  
        // return redirect()->route('providers.showProvider',$provider);
     
    }


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
