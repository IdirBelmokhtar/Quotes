<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'desc_ar' => Str::limit(fake()->sentence(), 300),
            'desc_en' => Str::limit(fake()->sentence(), 300),
            'source_ar' => Str::limit(fake()->sentence(), 300),
            'source_en' => Str::limit(fake()->sentence(), 300), 
            'category_id'=>fake()->randomElement(Category::pluck('id')),
        ];
    }
}
