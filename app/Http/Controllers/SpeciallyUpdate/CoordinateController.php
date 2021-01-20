<?php

namespace App\Http\Controllers\SpeciallyUpdate;

use App\Http\Controllers\AssistanceController;
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
        $request->validate ([
            'name' => 'required',
            'kind' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'price' => 'required',
            'open_week' => 'required',
            'break_week' => 'required',
            'close_week' => 'required',
            'open_weekend' => 'required',
            'break_weekend' => 'required',
            'close_weekend' => 'required',
            'note' => 'required',

            
          
        ]);

       
        $providers = Provider::create($request->all());


        // return view('specially.coordinations.show',compact('assistance'));
       
        
        
        
        

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

    public function checkProvider(Provider $provider)
    {
        return view('specially.coordinations.check',compact('provider'));
    }

    public function editProvider(Provider $provider)
    {
        return view('specially.coordinations.edit',compact('provider'));


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


    public function updateProvider(Provider $provider)
    {

      return "Well Done";
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
