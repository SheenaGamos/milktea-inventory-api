<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Milk Tea',
            'description' => 'Traditional milk tea flavors',
        ]);

        Category::create([
            'name' => 'Fruit Tea',
            'description' => 'Refreshing fruit-based teas',
        ]);

        Category::create([
            'name' => 'Specialty Drinks',
            'description' => 'Unique and premium drinks',
        ]);
    }
}
