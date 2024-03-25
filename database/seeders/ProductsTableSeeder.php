<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 1; $i <= 50; $i++) {
            Product::create([
                'title' => 'Product ' . $i,
                'category' => 'Category ' . rand(1, 5)
            ]);
        }
    }
}
