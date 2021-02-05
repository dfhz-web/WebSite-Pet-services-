<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Module;
use App\Models\Assistance;
use App\Models\User;

class Coordinator extends Component
{

    public $search;

    public function render()
    {
        // $modules = Module::where('user_id', auth()->user()->id)->get();
        $assistances = Assistance::where('symptoms','LIKE','%'. $this->search .'%')->paginate();
        
        
        
   
        
        
       
        return view('livewire.coordinator',compact('assistances'));
    }

    // public function search_all_pages()
    // {
    //     $this->reset('page');
    // }

}
