<?php

namespace Database\Factories;

use App\Models\Theme;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email'=>fake()->unique()->safeEmail(),
            'user_name'=>fake()->name(),
            'password'=> static::$password ??= Hash::make('password'),
            'birth_date'=>fake()->date(),
            'nationality'=>fake()->country(),
            'gender'=>fake()->randomElement(['male','female']),
            'status'=>fake()->randomElement(['free','premuim']),
            'type'=>fake()->randomElement(['client']),
            'category_id'=>fake()->randomElement(Category::pluck('id')),
            'theme_id'=>fake()->randomElement(Theme::pluck('id'))
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
