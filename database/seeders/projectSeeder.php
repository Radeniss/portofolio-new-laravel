<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\projects;

class projectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        projects::create([
            'judul' => 'Project 1',
            'slug' => 'project-1',
            'category' => 'category for project 1',
            'image' => 'image1.jpg',
            'url' => 'url for project 1',
            'description' => 'Description for project 1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        projects::create([
            'judul' => 'Project 2',
            'slug' => 'project-2',
            'category' => 'category for project 2',
            'image' => 'image1.jpg',
            'url' => 'url for project 2',
            'description' => 'Description for project 2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        projects::create([
            'judul' => 'Project 2',
            'slug' => 'project-2',
            'category' => 'category for project 2',
            'image' => 'image1.jpg',
            'url' => 'url for project 2',
            'description' => 'Description for project 2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
