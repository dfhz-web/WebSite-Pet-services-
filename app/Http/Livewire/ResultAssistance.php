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

   public $assistances;
  






    public function mount(User $user)
    {
        $this->user = $user;

        // $this->answere = Answere::select('provider_id')
        //                  ->where('assistance_id', '=' , $user->id)
        //                  ->get();

        // $this->answere = Answere::where('assistance_id','=', $user->id)->get();

        // $this->answere = Answere::select('assistance_id')->get();
        // $this->answere= Answere::select('provider_id')->where('assistance_id','=',4)->get();

        $this->answere = Answere::select('provider_id')->where()
        $this->assistances = Assistance::where()->get();
        


      
                        

       



    }

    public function render()
    {

        
        $this->provider = Provider::find(5);
      
        return view('livewire.result-assistance');
    }
}
