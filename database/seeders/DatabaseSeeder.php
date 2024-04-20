<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password'=> 'password'
        ]);

        Topic::factory()->create([
            'name'=>'mystery',
        ]);
        Topic::factory()->create([
            'name'=>'thriller',
        ]);
        Topic::factory()->create([
            'name'=>'comedy',
        ]);
        Topic::factory()->create([
            'name'=>'drama',
        ]);

        Blog::factory(20)->create();

    }
}