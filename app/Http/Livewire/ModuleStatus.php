<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Module;
use App\Models\Lesson;

class ModuleStatus extends Component
{

    public $currently;
    public $module;
    
    public function mount(Module $module)
    {
        $this->module = $module;
        foreach ($module->lessons as $lesson) {
            ///si da false se le asigana el valor de esa leccion
            if(!$lesson->complete)
            {
                $this->currently = $lesson;
                break;
            }
        }
        if (!$this->currently) {
            $this->currently = $module->lessons->last();
        }

    }


 
    public function render()
    {
        return view('livewire.module-status');
    }





    ///Metodos
    public function lessonchange(Lesson $lesson)
    {
         $this->currently = $lesson;  
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

