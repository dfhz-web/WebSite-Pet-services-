<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Kind;

class KindSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Kind::create([
          'name' => 'Medical Assistance'


      ]);

      Kind::create([
        'name' => 'Dental Assistance'


    ]);

    Kind::create([
        'name' => 'Premiun'


    ]);
    }
}
