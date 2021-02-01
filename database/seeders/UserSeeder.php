<?php
  
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Daniel Felipe Herrera Zambrano',
            'email' => 'df.herrera19@ciaf.edu.co',
            'password' => bcrypt('12345678'),
        ]);

              $user->assignRole('Administrator');


        $user2 = User::create([
        'name' => 'andres  Zambrano',
        'email' => 'andres@ciaf.edu.co',
        'password' => bcrypt('12345678'),
        ]);

                $user2->assignRole('SpeciallyUpdate');



        $user3 = User::create([
        'name' => 'sophia zapata',
        'email' => 'shopia@ciaf.edu.co',
        'password' => bcrypt('12345678'),
        ]);

                $user3->assignRole('Coordinator');

                
        User::factory(30)->create();
    }
}
