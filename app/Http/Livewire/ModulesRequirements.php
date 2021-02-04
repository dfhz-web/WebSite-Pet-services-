<?php

namespace App\Http\Livewire;

use App\Models\Requirement;
use Livewire\Component;
use App\Models\Module;

class ModulesRequirements extends Component
{

    public $module,$requirement,$name;

    protected $rules = [
      'requirement.name' => 'required'
    ];

    public function mount(Module $module)
    {
      $this->module = $module;
      $this->requirement = new Requirement();
    }
    public function render()
    {
        return view('livewire.modules-requirements');
    }

    public function store()
    {

      $this->validate([
        'name' => 'required'
      ]);
      $this->module->requirements()->create([
        'name' => $this->name
      ]);

      $this->reset('name');
      $this->module = Module::find($this->module->id);
    }

    public function edit(Requirement $requirement)
    {
      $this->requirement = $requirement;

    } 
    public function update()
    {
      $this->validate();

      $this->requirement->save();

      $this->requirement = new Requirement();
      $this->module = Module::find($this->module->id);
    }

    public function destroy(Requirement $requirement)
    {
      $requirement->delete();
      $this->module = Module::find($this->module->id);
    }
}
