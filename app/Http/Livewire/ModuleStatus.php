<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Module;

class ModuleStatus extends Component
{
    public $module;

    public function mount(Module $module)
    {
      $this->module = $module;

    }
    public function render()
    {
        return view('livewire.module-status');
    }
}
