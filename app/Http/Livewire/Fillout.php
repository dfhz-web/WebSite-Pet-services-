<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Assistance;

class Fillout extends Component
{
    public $assistance;

    public function mount(Assistance $assistance)
    {
        $this->assistance = $assistance;
    }



    public function completed()
    {
        if(!$this->assistance->complete){
           
             $this->assistance->users()->attach(auth()->user()->id);
             $this->assistance->lesson()->attach(auth()->user()->id);
           }

           
       
    }
    
    public function render()
    {
        return view('livewire.fillout');
    }
}
