<?php

namespace App\Http\Livewire\specially;

use Livewire\Component;

use App\Models\Module;

use Livewire\WithPagination;

class ModuleIndex extends Component
{
    use WithPagination;
    public $search;
    public function render()
    {

        $modules = Module::where('title','LIKE','%'. $this->search .'%')
                          ->where('user_id', auth()->user()->id)
                          ->paginate(8);

        return view('livewire.specially.modules-index',compact('modules'));
    }
    public function search_all_pages()
    {
        $this->reset('page');
    }
}
