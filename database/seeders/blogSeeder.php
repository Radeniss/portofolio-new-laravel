<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class blogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Blog::create([
            'title' => 'First Blog Post',
            'content' => 'This is the content of the first blog post.',
            'slug' => 'first-blog-post',
            'image' => 'image1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Models\Blog::create([
            'title' => 'Second Blog Post',
            'content' => 'This is the content of the second blog post.',
            'slug' => 'second-blog-post',
            'image' => 'image1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
