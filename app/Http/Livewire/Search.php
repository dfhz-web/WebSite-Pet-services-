<?php

namespace App\Http\Livewire;


use App\Models\Module;

use Livewire\Component;

class Search extends Component
{

    public $search;

    public function render()
    {
        return view('livewire.search');
    }

    

    public function getResultsProperty()
    {
        return Module::where('title','LIKE', '%' .$this->search. '%')->take(8)->where('status',3)->get();
    }
}
