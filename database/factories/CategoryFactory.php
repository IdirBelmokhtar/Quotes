<?php

namespace Database\Factories;

use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
<<<<<<< HEAD
            "name" => fake()->name(),
            "logo" => fake()->image(),
            "is_free" => fake()->boolean(),
            "type" => fake()->randomElement(['quote', 'theme']),
=======
            'name'=>fake()->word(),
            'logo'=>fake()->image(),
            'is_free'=>fake()->randomElement([true,false]),
            'type'=>fake()->randomElement(['quote', 'theme']),
>>>>>>> 71ab626ba6118b5e445a36f9b4e130b525f6ebcc
        ];
    }
}
