<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create(['category_name' => 'Programming']);
        Category::create(['category_name' => 'Design']);
        Category::create(['category_name' => 'Marketing']);
        Category::create(['category_name' => 'Business']);
    }
}
