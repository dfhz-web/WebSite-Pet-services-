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
        $this->assistances = Assistance::select('id')->where('user_id','=',$user->id)->get();
        $this->answere = Answere::where('assistance_id','=',  $this->assistances[0]->id)->get();
       
        
        
        
        
        

      
                        

       



    }

    public function render()
    {
        $this->provider = Provider::find($this->answere[0]->provider_id);
        return view('livewire.result-assistance');
    }
}
