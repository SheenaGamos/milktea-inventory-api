<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $milkTeaCategory = Category::where('name', 'Milk Tea')->first();
        $fruitTeaCategory = Category::where('name', 'Fruit Tea')->first();

        Product::create([
            'category_id' => $milkTeaCategory->id,
            'name' => 'Classic Milk Tea',
            'flavor' => 'Black Tea',
            'size' => 'Medium',
            'price' => 3.50,
            'status' => 'active',
            'description' => 'Traditional black milk tea with tapioca pearls',
        ]);

        Product::create([
            'category_id' => $fruitTeaCategory->id,
            'name' => 'Mango Fruit Tea',
            'flavor' => 'Mango',
            'size' => 'Large',
            'price' => 4.00,
            'status' => 'active',
            'description' => 'Refreshing mango fruit tea with real fruit bits',
        ]);
    }
}
