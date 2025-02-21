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
            'name' => 'Project 1',
            'slug' => 'project-1',
            'description' => 'Description for project 1',
            'image' => 'image1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Projects::create([
            'name' => 'Project 2',
            'slug' => 'project-2',
            'description' => 'Description for project 2',
            'image' => 'image2.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Projects::create([
            'name' => 'Project 3',
            'slug' => 'project-3',
            'description' => 'Description for project 3',
            'image' => 'image3.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
