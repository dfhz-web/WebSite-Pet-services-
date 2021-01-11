<?php

namespace App\Http\Controllers\SpeciallyUpdate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Module;

class ModuleController extends Controller
{
    /**
     * Display a listing sof the resource.
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
        return view('specially.modules.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('specially.modules.edit',compact('module'));
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
        //
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
