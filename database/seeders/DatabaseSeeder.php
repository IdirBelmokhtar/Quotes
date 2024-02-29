<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Quote;
use App\Models\Theme;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        # Vider las tables sans supprimer
        // User::truncate();
        // Quote::truncate();
        // Theme::truncate();
        // Category::truncate();


        # Créer
        \App\Models\Category::factory(10)->create();
        \App\Models\Theme::factory(10)->create();
        \App\Models\Quote::factory(10)->create();
        # \App\Models\User::factory(10)->create();





        /* \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */
    }
}
