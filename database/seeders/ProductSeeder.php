<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate 10 records of Products (with status as true) and save then in to DB
        Product::factory()->count(7)->create([
            'status' => true,
        ]);

        // // Generate 10 records of Products and save then in to m emory only
        // Product::factory()->count(10)->make();
    }
}
