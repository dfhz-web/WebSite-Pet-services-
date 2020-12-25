<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Price;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Price::create([
            'name' => 'Free',
            'Value' => 0,

        ]);

        Price::create([
            'name' => '15.99 USD',
            'Value' => 15.99,

        ]);

        Price::create([
            'name' => '17 USD',
            'Value' => 17,

        ]);

        Price::create([
            'name' => '10 USD',
            'Value' => 10,

        ]);
    }
}
