<?php

namespace App\Http\Livewire\Specially;

use Livewire\Component;
use App\Models\Module;

class ModuleExactly extends Component
{
    public $module;

    public function mount(Module $module)
    {
        $this->module = $module;

    }



    public function render()
    {
        return view('livewire.specially.module-exactly')->layout('layouts.specially');
    }
}
