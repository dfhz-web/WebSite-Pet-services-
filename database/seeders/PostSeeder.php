<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::factory(100)->create();

            foreach ($posts as $post) {
             Image::factory(1)->create([
                'imageable_id' => $post->id,
                'imageable_type' => Post::class,
            ]);

            ///miro modelo post.php para saber a que funcion llmar que relaciona muhcos a muhcos de post con seeder
            ///hace datos en el tag_id y en el ppost_id
            
            //$post->tags()->attach(1); solo llena tag_id
            ///tags viene del modelo post por eso el post se genera el id y attach es para llenar el tag_id
            $post->tags()->attach([
                rand(1,4),
                rand(5,8),
            ]);
       
           
        }
    }
}
