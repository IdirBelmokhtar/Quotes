<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Theme>
 */
class ThemeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "font" => fake()->name(),
            "image" => fake()->image(),
            "is_free" => fake()->boolean(),
            "category_id" => fake()->randomElement(Category::pluck('id')),
            "created_by" => fake()->randomElement(User::pluck('id')),
        ];
    }
}
