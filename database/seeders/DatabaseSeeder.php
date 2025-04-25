<?php

namespace Database\Seeders;

use password;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //     [User::factory(10)->create(),
        //     Post::factory(100)->create(),
        //     Category::factory(3)->create()
        // ];        

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Radeniss',
            'username' => 'radenis',
            'email' => 'radenis@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);

        Category::create([
            'name' => 'Category 1',
            'slug' => 'category-1'
        ]);

        Post::create([
            'title' => 'title 1',
            'author_id' => 1,
            'category_id' => 1,
            'slug' => 'test-1',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea aliquid, possimus voluptatem officia voluptas, distinctio molestiae quasi, modi ipsa culpa minus debitis excepturi facere earum fugiat. Nam, minima quasi est laboriosam dolor consectetur pariatur recusandae ad perspiciatis qui quam fuga fugiat natus corrupti culpa cum, sit iste, voluptatum omnis accusamus.'
        ]);
    }
}
