<?php

namespace Database\Seeders;

use App\Models\Audience;
use App\Models\Description;
use App\Models\Module;
use App\Models\Goal;
use App\Models\Lesson;
use App\Models\Picture;
use App\Models\Requirement;
use App\Models\Section;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modules = Module::factory(40)->create();

        foreach ($modules as $module) {
             Picture::factory(1)->create([
            'pictureable_id' => $module->id,
            'pictureable_type' => 'App\Models\Module',

            ]);

        

            Requirement::factory(4)->create([
                'module_id' =>  $module->id
            ]);

            

            Goal::factory(4)->create([
                'module_id' =>  $module->id
            ]);

            Audience::factory(4)->create([
                'module_id' =>  $module->id
            ]);


            $sections = Section::factory(4)->create([
                'module_id' =>  $module->id
            ]);

            foreach ($sections as $section) {
                $lessons = Lesson::factory(4)->create(['section_id' => $section->id]);
               
                  foreach ($lessons as $lesson) {
                      Description::factory(1)->create(['lesson_id' => $lesson->id]);
                    }
               
                
            }
        }
    }
  }
