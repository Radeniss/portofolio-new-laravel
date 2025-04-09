<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class certificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\certificates::create([
            'name' => 'Certificate Name',
            'slug' => 'Certificate slug',
            'image' => 'default.jpg',
            'description' => 'Certificate Description',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
