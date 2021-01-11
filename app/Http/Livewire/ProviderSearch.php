<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Provider;
use Livewire\WithPagination;

class ProviderSearch extends Component
{

    use WithPagination;
    public $search;

    public function render()
    {
        $providers = Provider::where('name','LIKE','%'. $this->search .'%')
                              ->orWhere('kind','LIKE','%'. $this->search .'%')
                              ->paginate(8);

        return view('livewire.provider-search',compact('providers'));
    }

    public function search_all_pages()
    {
        $this->reset('page');
    }
}
