<?php

namespace Database\Factories;

use App\Models\Provider;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProviderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Provider::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'name' => $this->faker->sentence(),
            'kind'  => $this->faker->sentence(8),
            'address' => $this->faker->sentence(12),
            'email' => $this->faker->email(),
            'phone' => $this->faker->numerify(10),
            'status' => $this->faker->randomElement([Provider::unknown,Provider::known,Provider::approval]),
            'price' =>   $this->faker->numerify(4),
            'open_week' => $this->faker->time(),
            'break_week'  => $this->faker->time(),
            'close_week'  => $this->faker->time(),
            'open_weekend'  => $this->faker->time(),
            'break_weekend'  => $this->faker->time(),
            'close_weekend'  => $this->faker->time(),
            'note' => $this->faker->sentence(10),
        ];
    }
}
