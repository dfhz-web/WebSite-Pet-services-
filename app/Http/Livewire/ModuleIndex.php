<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Module;

use App\Models\Type;

use App\Models\Kind;

use Livewire\WithPagination;

class ModuleIndex extends Component
{
    use WithPagination;
    public $type_id;
    public $kind_id;

    

    public function render()
    {   
        

        $types = Type::all();
        $kinds  = Kind::all();
        $modules = Module::where('status', 3)
                        //    ->where('type_id', $this->type_id)
                        //    ->where('kind_id', $this->kind_id)
                           ->type($this->type_id)
                           ->kind($this->kind_id)
                         ->latest('id')
                         ->paginate(8);
        return view('livewire.module-index', compact('types','kinds','modules'));
    }

    public function resetFilters()
    {
        $this->reset(['type_id','kind_id']);
    }
}





