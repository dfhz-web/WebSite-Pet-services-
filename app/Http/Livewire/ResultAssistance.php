<?php

namespace App\Http\Livewire;

use App\Models\Assistance;
use App\Models\Provider;
use App\Models\User;
use Livewire\Component;
use App\Models\Answere;
use App\Models\Help;

class ResultAssistance extends Component
{
   public $user;
   public $answere;
   public $provider;
   public $answereProvider;
   public $help;
   public $store;






    public function mount(User $user)
    {
        $this->user = $user;

        $this->answere = Answere::select('provider_id')
                         ->where('assistance_id', '=' , $user->id)
                         ->get();

        $this->help = Help::all();

        $ams = $this->help;

        $this->store = $ams;

        $this->provider = Provider::where('id','=','20')->get();







        

        

        

      

     

       

       

    }

    public function render()
    {
        return view('livewire.result-assistance');
    }
}
