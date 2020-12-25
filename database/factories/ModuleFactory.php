<?php

namespace Database\Factories;

use App\Models\Kind;
use App\Models\Module;
use App\Models\Price;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;


class ModuleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Module::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence();
        return [
           'title' => $title,
           'subtitle' => $this->faker->sentence(),
           'description' => $this->faker->paragraph(),
           'status' => $this->faker->randomElement([Module::eraser,Module::check,Module::published]),
           'slug'=> Str::slug($title),
           'user_id' => User::all()->random()->id,
           'kind_id' => Kind::all()->random()->id,
           'type_id' => Type::all()->random()->id,
           'price_id' => Price::all()->random()->id,
        ];
    }
}
