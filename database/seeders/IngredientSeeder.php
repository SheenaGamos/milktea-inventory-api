<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ingredient;
use App\Models\Product;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classicMilkTea = Product::where('name', 'Classic Milk Tea')->first();
        $mangoFruitTea = Product::where('name', 'Mango Fruit Tea')->first();

        Ingredient::create([
            'product_id' => $classicMilkTea->id,
            'name' => 'Black Tea Leaves',
            'quantity' => 10.0,
        ]);

        Ingredient::create([
            'product_id' => $classicMilkTea->id,
            'name' => 'Tapioca Pearls',
            'quantity' => 5.0,
        ]);

        Ingredient::create([
            'product_id' => $mangoFruitTea->id,
            'name' => 'Mango Syrup',
            'quantity' => 8.0,
        ]);

        Ingredient::create([
            'product_id' => $mangoFruitTea->id,
            'name' => 'Fruit Bits',
            'quantity' => 3.0,
        ]);
    }
}
