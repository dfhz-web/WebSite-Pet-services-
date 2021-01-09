<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class ManagementUsers extends Component
{
    public $search;
    protected $paginationTheme = "bootstrap";
    use WithPagination;
   

    public function render()
    {
        $users = User::where('name', 'LIKE', '%' . $this->search . '%')
                     ->orWhere('email', 'LIKE', '%' . $this->search . '%')
                     ->paginate(8);
        return view('livewire.management-users',compact('users'));

    }
    public function search_all_pages()
    {
        $this->reset('page');

    }
}
