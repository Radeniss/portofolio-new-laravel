<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();
        Category::create([
            'name' => 'web developer',
            'slug' => 'web-developer',
            'color' => 'blue',
        ]);

        Category::create([
            'name' => 'game developer',
            'slug' => 'game-developer',
            'color' => 'green',
        ]);

        Category::create([

            'name' => 'slice of life',
            'slug' => 'slice-of-life',
            'color' => 'red',
        ]);
    }
}
