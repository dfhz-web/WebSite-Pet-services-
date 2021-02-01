<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class Share extends Component
{

    use WithPagination;
    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $posts = Post::where('user_id',auth()->user()->id)
                       ->where('name','LIKE','%'. $this->search . '%')
                       ->latest('id')
                       ->paginate(6);
        return view('livewire.share',compact('posts'));
    }
}
