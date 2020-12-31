<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Storage;

use App\Models\Category;
use App\Models\Suggestion;
use App\Models\Tag;
use Illuminate\Database\Seeder;





class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
   
       Storage::deleteDirectory('posts');
       Storage::makeDirectory('posts');

       Storage::deleteDirectory('modules');
       Storage::makeDirectory('modules');

       $this->call(UserSeeder::class);
       Category::factory(4)->create();
       Tag::factory(8)->create();
       $this->call(PostSeeder::class);
      
       $this->call(KindSeeder::class);

       $this->call(TypeSeeder::class);

       $this->call(PriceSeeder::class);

       $this->call(PlatformSeeder::class);

       $this->call(ModuleSeeder::class);


       $this->call(SuggestionSeeder::class);

}
}
