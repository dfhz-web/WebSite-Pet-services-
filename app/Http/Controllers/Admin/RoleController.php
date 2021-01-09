<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Talk;
use Illuminate\Http\Request;
use Illuminate\Routing\RedirectController;
use Illuminate\Support\Facades\Redirect;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:list-role')->only('index');
        $this->middleware('can:create-role')->only('create','store');
        $this->middleware('can:edit-role')->only('edit','update');
        $this->middleware('can:delete-role')->only('destroy');
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $roles = Role::all();
       return view('admin1.role.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();

        return view('admin1.role.create', compact('permissions'));
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
           'name'  => 'required',
           'permissions' => 'required'

        ]);

        $role = Role::create([
            'name' => $request->name
        ]);

        $role->permissions()->attach($request->permissions);

        $roles = Role::all();

  

 
       
        // return redirect()->route('admin1.role.index');
        return view('admin1.role.index',compact('roles','role'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view('admin1.role.show',compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    
    {
        $permissions = Permission::all();
        return view('admin1.role.edit',compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name'  => 'required',
            'permissions' => 'required'
 
         ]);
        
         $role->update([
            'name'  => $request->name
            
         ]);

         ///delete updating
         $role->permissions()->sync($request->permissions);

         $roles = Role::all();

         return view('admin1.role.index',compact('role','roles'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        $roles = Role::all();

         return view('admin1.role.index',compact('role','roles'));
    }
}
