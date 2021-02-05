<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Module;
use App\Models\Lesson;
use App\Models\Data;
use App\Http\Controllers\DataController;
use App\Http\Requests\StoreData;
use App\Models\Assistance;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ModuleStatus extends Component
{
    use AuthorizesRequests;

    public $currently;
    public $module;
    public $assistance;
    public $currentUser;
    public $rights=0;
    public $come;
    
    
    public function mount(Module $module, Assistance $assistance)
    {
        $this->assistance = $assistance;
        $this->module = $module;
       
        foreach ($module->lessons as $lesson) {
            ///si da false se le asigana el valor de esa leccion
            if(!$lesson->complete)
            {
                $this->currently = $lesson;
               
                break;
            }
        }

         $this->currentUser =  Auth::user();
         $stepuser = $this->currentUser;

        //  $this->come = Assistance::select('id')->where('user_id','=',$this->currentUser->id)->get();
    
      
        if (!$this->currently) {
            $this->currently = $module->lessons->last();
        }

        
        
     

        $this->authorize('alreadyEnrolled',$module);

    }


 
    public function render()
    {
        return view('livewire.module-status');
    }





    ///Metodos
//    public function identifyUser()
//    {
//     // $this->currentUser = $this->currently->users('id');
//     // $user =  $this->currentUser;
//     $this->currentUser = $
//    }


    public function lessonchange(Lesson $lesson)
    {
         $this->currently = $lesson;  
    }

    public function HerebyTerms()
    {
        $this->rights = 1;
    }



    ////logica que nesecito para el formulario
    public function completed()
    {
        if($this->currently->complete){
           ///Delete data
              $this->currently->users()->detach(auth()->user()->id);
              
            }
           else{
               ////add
             $this->currently->users()->attach(auth()->user()->id);
           }

           $this->currently = Lesson::find($this->currently->id);
           $this->module = Module::find($this->module->id);
       
    }

    //fill fill out and lesson of assistance.... in wait
    public function complete()
    {
        // $this->assistance =  Assistance::create(['lesson_id' =>  $this->currently->id]);
        if($this->currently->complete){
            ///Delete data
               $this->assistance->users()->detach(auth()->user()->id);
             }
            else{
                ////add
              $this->assistance->users()->attach(auth()->user()->id);
            }
       
    }



   //propiedades computadas
    public function getIndexProperty()
    {
        return  $this->module->lessons->pluck('id')->search($this->currently->id);

    }
    public function getPreviousProperty()
    {
        if($this->index == 0)
        {
            return  null;
        }

        else{
           return  $this->module->lessons[$this->index - 1];


        }
       
    }

    public function getNextProperty()
    {
        if($this->index == $this->module->lessons->count() - 1)
        {
            return  null;

        }
        else
        {
           return $this->module->lessons[$this->index + 1];
        }
    }

    public function getProgressProperty()
    {
        $z = 0;

        foreach ($this->module->lessons as $lesson) {
            if ($lesson->complete) {
                $z++;
            }
        }

        $progress = ($z * 100)/($this->module->lessons->count());
        return round($progress,3);
    }
}

