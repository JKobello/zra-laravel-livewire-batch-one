<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Utils\FileHelper;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $faker = fake();
        // $methods = get_class_methods($faker);
        // dd($methods);
        $path = storage_path('app/public/attachments/products/img');
        FileHelper::createFolderIfNotExists($path);

        return [
            'name'        => fake()->word(2, true),
            'code'        => strtoupper(Str::random(6)),
            'unit_price'  => fake()->randomFloat(),
            'type'        => fake()->randomElement(['Electronics', 'Furniture', 'Food', 'Clothing']),
            'description' => fake()->sentence(10),
            // 2 decimals, min 5, max 500
            'unit_price'  => fake()->randomFloat(2, 5, 500),
            'stock'       => fake()->numberBetween(1, 100),
            'mf_date'     => fake()->dateTimeBetween('-2 years', 'now')->format('Y-m-d'),
            'photo' => function () use ($path) {
                return 'attachments/products/img/' . fake()->image($path, 400, 300, null, false);
            },
        ];
    }
}
