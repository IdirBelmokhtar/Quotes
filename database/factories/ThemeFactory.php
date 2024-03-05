<?php

namespace Database\Factories;

use App\Models\Category;
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
            'font_ar'=>fake()->word(),
            'font_en'=>fake()->word(),
            'image'=>fake()->image(),
            'is_free'=>fake()->randomElement([true,false]),
            'category_id'=>fake()->randomElement(Category::where('type', 'theme')->pluck('id')),
        ];
    }
}
