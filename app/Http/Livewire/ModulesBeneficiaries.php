<?php

namespace App\Http\Livewire;

use App\Models\Module;
use Livewire\Component;
use Livewire\WithPagination;

class ModulesBeneficiaries extends Component
{

    use WithPagination;
    public $module,$search;

    public function mount(Module $module)
    {
       $this->module = $module;

    }

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function render()
    {
        $beneficiaries = $this->module->beneficiaries()
                               ->where('name','LIKE','%'.$this->search .'%')      
                               ->paginate(4); 
        return view('livewire.modules-beneficiaries',compact('beneficiaries'))->layout('layouts.specially');
    }
}
