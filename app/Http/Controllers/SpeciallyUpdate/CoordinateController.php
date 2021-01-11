<?php

namespace App\Http\Controllers\SpeciallyUpdate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assistance;
use App\Models\Provider;

class CoordinateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Assistance $assistance)
    {
        $providerss = Provider::all();
        return view('specially.index',compact('providerss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

   
        return view('specially.index',compact('providers'));
    }

    /**
     * Display the specified resource.
     ****
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Assistance $assistance, Provider $provider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Assistance $assistance, Provider $provider)
    {
        //
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
}
