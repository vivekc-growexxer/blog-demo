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
        Category::create([
            'name' => 'Laravel',
            'slug' => 'laravel'
        ]);

        Category::create([
            'name' => 'Angular',
            'slug' => 'angluar'
        ]);

        Category::create([
            'name' => 'React',
            'slug' => 'react'
        ]);
    }
}
