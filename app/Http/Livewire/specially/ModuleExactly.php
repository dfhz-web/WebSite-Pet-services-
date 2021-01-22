<?php

namespace App\Http\Livewire\Specially;

use Livewire\Component;
use App\Models\Module;
use App\Models\Section;

class ModuleExactly extends Component
{
    protected $rules = [
        'section.name' => 'required'
    ];
    public $module;
    public $section;
    public $name;

    public function mount(Module $module)
    {
        $this->module = $module;
        $this->section =new Section();

    }



    public function render()
    {
        return view('livewire.specially.module-exactly')->layout('layouts.specially');
    }
    public function edit(Section $section)
    {
        $this->section = $section;
    }

    public function update()
    {
        $this->validate();
        $this->section->save();
        $this->section = new Section();
        $this->module = Module::find($this->module->id);
    }

    public function storeName()
    {
        $this->validate([
            'name' => 'required'
        ]);

        Section::create([
            'name' => $this->name,
            'module_id' => $this->module->id,

        ]);
        $this->reset('name');
        $this->module = Module::find($this->module->id);
    }

    public function destroy(Section $section)
    {
        $section->delete();
        $this->module = Module::find($this->module->id);

    }
}
