<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kind;

class KindController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $kinds = Kind::all();
      return view('admin1.kinds.index',compact('kinds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin1.kinds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
          'name'=>'required|unique:kinds',
      ]);
      $kind = Kind::create($request->all());

      return redirect()->route('administrator.kinds.edit',$kind)->with('info','New kind was created successfully');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kind $kind)
    {
        return view('admin1.kinds.show',compact('kind'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kind $kind)
    {
        return view('admin1.kinds.edit',compact('kind'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kind $kind)
    {
        $request->validate([
            'name'=>'required|unique:kinds,name,'.$kind->id
        ]);
        $kind->update($request->all());
        return redirect()->route('administrator.kinds.edit',$kind)->with('info','New kind was updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kind $kind)
    {
        $kind->delete();
        return redirect()->route('administrator.kinds.index')->with('info','Kind was deleted successfully');

    }
}
