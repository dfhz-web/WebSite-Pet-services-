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
            if(!$lesson->complete)
            {
                $this->currently = $lesson;
                break;
            }
        }

    }
    public function render()
    {
        return view('livewire.module-status');
    }

    public function lessonchange(Lesson $lesson)
    {
         $this->currently = $lesson;  
    }

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
}

