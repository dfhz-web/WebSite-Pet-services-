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

              $user->assignRole('Tributary');


        $user2 = User::create([
        'name' => 'Paola Narvaes',
        'email' => 'paola@ciaf.edu.co',
        'password' => bcrypt('12345678'),
        ]);

                $user2->assignRole('Veterinary');



        // $user3 = User::create([
        // 'name' => 'sophia zapata',
        // 'email' => 'shopia@ciaf.edu.co',
        // 'password' => bcrypt('12345678'),
        // ]);

        //         $user3->assignRole('Coordinator');

                
        User::factory(20)->create();
    }
}
