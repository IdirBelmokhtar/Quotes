<?php

namespace Database\Factories;

use App\Models\Quote;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuotesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id'=>fake()->randomElement(Quote::pluck('id')),
            'desc_ar'=>fake()->Faker::create('ar_AR')->sentence(),
            'desc_en'=>fake()->Faker::create('en_US')->sentence(),
            'source_ar'=>fake()->Faker::create('ar_AR')->sentence(),
            'source_en'=>fake()->Faker::create('en_US')->sentence(),
            'category_id'=>fake()->randomElement(Category::pluck('id')),

        ];
    }
}
