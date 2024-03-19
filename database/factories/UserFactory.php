<?php

namespace Database\Factories;

<<<<<<< HEAD
use App\Models\Theme;
use App\Models\Category;
=======
use App\Models\Category;
use App\Models\Theme;
>>>>>>> 71ab626ba6118b5e445a36f9b4e130b525f6ebcc
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

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
            'user_name' => fake()->name(),
<<<<<<< HEAD
            'email' => fake()->safeEmail(),
            'password' => static::$password ??= Hash::make('password'),
            'birth_date' => fake()->date(),
            'nationality' => fake()->country(),
            'gender' => fake()->randomElement(['male','female']),
            'status' => fake()->randomElement(['free','premium']),
            'type' => fake()->randomElement(['client']),

            "category_id" => fake()->randomElement(Category::pluck('id')),
            "theme_id" => fake()->randomElement(Theme::pluck('id')),

=======
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'birth_date' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'nationality'=> fake()->country(),
            'gender'=> fake()->randomElement(['male','female']),
            'status'=> fake()->randomElement(['free','premium']),
            'type'=> fake()->randomElement(['client']),
            'category_id'=> fake()->randomElement(Category::pluck('id')),
            'theme_id'=> fake()->randomElement(Theme::pluck('id')),
>>>>>>> 71ab626ba6118b5e445a36f9b4e130b525f6ebcc
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
