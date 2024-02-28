<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quote>
 */
class QuoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'desc_ar'=>fake()->Faker::create('ar_SA')->sentence(),
            'desc_en' => fake()->Faker::create('en_US')->sentence(),
            'source_ar'=>fake()->name(),
            'source_en'=>fake()->name(),
            'category_id'=>fake()->randomElement(Category::pluck('id')),
        ];
    }
}
