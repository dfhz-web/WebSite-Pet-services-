<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**s
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'Create modules',
        ]);

        Permission::create([
            'name' => 'Read modules',
        ]);

        Permission::create([
            'name' => 'Update modules',
        ]);

        Permission::create([
            'name' => 'Delete modules',
        ]);



        

        Permission::create([
            'name' => 'Coordinate modules',
        ]);



        
      
    }
}

