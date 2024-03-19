<?php

namespace Database\Factories;

use App\Models\Category;
<<<<<<< HEAD
use App\Models\User;
=======
>>>>>>> 71ab626ba6118b5e445a36f9b4e130b525f6ebcc
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
<<<<<<< HEAD
            "font" => fake()->name(),
            "image" => fake()->image(),
            "is_free" => fake()->boolean(),
            "category_id" => fake()->randomElement(Category::pluck('id')),
=======
            'font_ar'=>fake()->word(),
            'font_en'=>fake()->word(),
            'image'=>fake()->image(),
            'is_free'=>fake()->randomElement([true,false]),
            'category_id'=>fake()->randomElement(Category::where('type', 'theme')->pluck('id')),
>>>>>>> 71ab626ba6118b5e445a36f9b4e130b525f6ebcc
        ];
    }
}
