<?php

namespace App\Http\Controllers\SpeciallyUpdate;

use App\Http\Controllers\Controller;
use App\Models\Kind;
use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Price;

class ModuleController extends Controller
{
    /**
     * Display a listing ssof the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('specially.modules.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kinds = Kind::pluck('name', 'id');
        $prices = Price::pluck('name', 'id');
        return view('specially.modules.create',compact('kinds','prices'));

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
            'kind_id' => 'required',
            'price_id' => 'required',
            'title' => 'required',
            'slug' => 'required|unique:modules',
            'subtitle' => 'required',
            'description' => 'required',
          
        ]);

        $modules = Module::create($request->all());

        
        // $kinds = Kind::pluck('name', 'id');
        // $prices = Price::pluck('name', 'id');
       
        // return view('specially.modules.edit',compact('modules','kinds','prices'));

        return view('specially.modules.index');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        return view('specially.modules.create',compact('module'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\sHttp\Response
     */
    public function edit(Module $module)
    {
        $kinds = Kind::pluck('name', 'id');
        $prices = Price::pluck('name', 'id');
       
        return view('specially.modules.edit',compact('module','kinds','prices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Module $module)
    {
        return "hi";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        //
    }
}
