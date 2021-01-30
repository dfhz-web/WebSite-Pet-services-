<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class BlogSearch extends Component
{
    public $search;

    public function render()
    {
        return view('livewire.blog-search');
    }

    
    
    public function getResultsProperty()
    {
        return Post::where('name','LIKE', '%' .$this->search. '%')->take(8)->where('status',2)->get();
    }
}
