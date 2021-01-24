<?php

namespace App\Http\Livewire;

use App\Models\Assistance;
use Livewire\Component;
use App\Models\Provider;
use Livewire\WithPagination;

class ProviderSearch extends Component
{

    use WithPagination;
    public $search;

    public $assistance;
    

    public function mount(Assistance $assistance)
    {
        $this->assistance = $assistance;
       
       
    }

    public function render()
    {
        $providers = Provider::where('name','LIKE','%'. $this->search .'%')
                              ->orWhere('kind','LIKE','%'. $this->search .'%')
                              ->latest('id')
                              ->paginate(6);

        return view('livewire.provider-search',compact('providers'));
    }

    public function search_all_pages()
    {
        $this->reset('page');
    }
}
