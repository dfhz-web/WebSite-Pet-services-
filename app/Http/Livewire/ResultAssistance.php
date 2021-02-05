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

   public $prueba="hello";

   
  






    public function mount(User $user)
    {
        $this->user = $user;

        // $this->answere = Answere::select('provider_id')
        //                  ->where('assistance_id', '=' , $user->id)
        //                  ->get();

        // $this->answere = Answere::where('assistance_id','=', $user->id)->get();

        // $this->answere = Answere::select('assistance_id')->get();
        // $this->answere= Answere::select('provider_id')->where('assistance_id','=',4)->get();

        // $this->answere = Answere::select('provider_id')->where()
        // $this->assistances = Assistance::where()->get();





       
           $this->assistances = Assistance::select('id')->where('user_id','=',$user->id)->get();

                if($this->assistances)
                {
                  $this->answere = Answere::where('assistance_id','=',  $this->assistances[0]->id)->get();
                }
        
        
        
        
        // $this->answere = Answere::where('assistance_id','=',$this->assistances[0]->id)->get();
      
        // $this->provider = Provider::where('id','=',$this->answere[0]->provider_id)->get();
    
        //  ssss  $this->assistances = json_decode($this->assistances);
   
        // $this->answere = Answere::where('assistance_id','=',$this->assistances)->get();

      
                        

       



    }

    public function render()
    {
       
        
        if($this->assistances)
        {

            // $this->prueba="holaaaaaaaa";

        $this->provider = Provider::find($this->answere[0]->provider_id);
        
        }
    
       
      
        return view('livewire.result-assistance');
    }
}
