<?php

namespace App\Http\Livewire\Specially;

use App\Models\Lesson;
use App\Models\Platform;
use App\Models\Section;
use Livewire\Component;

class ModulesLesson extends Component
{

    public $section;
    public $lesson;
    public $platforms;

    public $name;
    public $platform_id = 1;
    public $url;
    public $fillout;
    public $answere;





    protected $rules =[
        'lesson.name' => 'required',
        'lesson.platform_id' => 'required',
        'lesson.url' => ['required', 'regex:%^ (?:https?://)? (?:www\.)? (?: youtu\.be/ | youtube\.com (?: /embed/ | /v/ | /watch\?v= ) ) ([\w-]{10,12}) $%x'],
        'lesson.fillout' => 'required',
        'lesson.answere' => 'required'
    ];
    

    public function mount(Section $section)
    {
        $this->section = $section;
        $this->platforms = Platform::all();
        
        $this->lesson = new Lesson();

    }
    public function render()
    {
        return view('livewire.specially.modules-lesson');
    }
    public function edit(Lesson $lesson)
    {
        $this->resetValidation();
        $this->lesson = $lesson;

    }
    public function update()
    {
        $this->validate();
        $this->lesson->save();
        $this->lesson = new Lesson();
        $this->section = Section::find($this->section->id);
    }
    public function cancelIt()
    {
        $this->lesson = new Lesson();

    }

    public function store()
    {
        $rules =[
            'name' => 'required',
            'platform_id' => 'required',
            'url' => ['required', 'regex:%^ (?:https?://)? (?:www\.)? (?: youtu\.be/ | youtube\.com (?: /embed/ | /v/ | /watch\?v= ) ) ([\w-]{10,12}) $%x'],
            'fillout' => 'required',
            'answere' => 'required'
        ];

        

        $this->validate($rules);
        Lesson::create([
            'name' => $this->name,
            'platform_id' => $this->platform_id,
            'url' => $this->url,
            'section_id' => $this->section->id,
            'fillout' => $this->fillout,
            'answere' => $this->answere,
        ]);

        $this->reset([
            'name',
            'platform_id',
            'url',
            'section_id',
            'fillout',
            'answere',
        ]);
        $this->section = Section::find($this->section->id);

    }
}
