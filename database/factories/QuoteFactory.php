<?php

namespace Database\Factories;

<<<<<<< HEAD
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
=======
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
>>>>>>> 71ab626ba6118b5e445a36f9b4e130b525f6ebcc

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
<<<<<<< HEAD
            "desc_ar" => fake()->text(),
            "desc_en" => fake()->text(),
            "source_ar" => fake()->name(),
            "source_en" => fake()->name(),
            "category_id" => fake()->randomElement(Category::pluck('id')),
=======
            'desc_ar'=>fake()->sentence(),
            'desc_en' => fake()->sentence(),
            'source_ar'=>fake()->name(),
            'source_en'=>fake()->name(),
            'category_id'=>fake()->randomElement(Category::where('type', 'quote')->pluck('id')),
>>>>>>> 71ab626ba6118b5e445a36f9b4e130b525f6ebcc
        ];
    }
}
