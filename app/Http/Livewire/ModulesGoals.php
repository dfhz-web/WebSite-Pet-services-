<?php

namespace App\Http\Livewire;

use App\Models\Goal;
use App\Models\Module;
use Livewire\Component;


class ModulesGoals extends Component
{

    public $module,$goal,$name;

    protected $rules = [
      'goal.name' => 'required'
    ];

    public function mount(Module $module)
    {
      $this->module = $module;
      $this->goal = new Goal();
    }


    public function render()
    {
        return view('livewire.modules-goals');
    }

    public function store()
    {

      $this->validate([
        'name' => 'required'
      ]);
      $this->module->goals()->create([
        'name' => $this->name
      ]);

      $this->reset('name');
      $this->module = Module::find($this->module->id);
    }

    public function edit(Goal $goal)
    {
      $this->goal = $goal;

    } 
    public function update()
    {
      $this->validate();

      $this->goal->save();

      $this->goal = new Goal();
      $this->module = Module::find($this->module->id);
    }

    public function destroy(Goal $goal)
    {
      $goal->delete();
      $this->module = Module::find($this->module->id);
    }
}


