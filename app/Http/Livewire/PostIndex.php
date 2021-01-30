<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;


use Livewire\WithPagination;

class PostIndex extends Component
{

    use WithPagination;
    public function render()
    {


        $posts = Post::where('status', 2)->latest('id')->paginate(8);

        return view('livewire.post-index',compact('posts'));
    }

   
}




