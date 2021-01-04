<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Module;

class ModuleController extends Controller
{
    public function index()
    {
        return view('modules.index');
    }

    public function show(Module $module)
    {   
        $this->authorize('statusPublished',$module);


        
        $similars = Module::where('type_id',$module->type_id)
                           ->where('id', '!=', $module->id)
                           ->where('status',3)
                           ->latest('id')
                           ->take(4)
                           ->get();
        return view('modules.show', compact('module','similars'));
    }

    public function getting(Module $module)
    {
       $module->beneficiaries()->attach(auth()->user()->id);
       return redirect()->route('modules.status',$module);
    }


    // it is not necessaty due that iam using livewire like a controller
 
}
