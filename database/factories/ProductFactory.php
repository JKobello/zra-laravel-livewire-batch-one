<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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

        return [
            'name' => fake()->name(),
            'code' => Str::random(6),
            'unit_price' => fake()->randomFloat(),
            'type' => Str::random(5),
            'description' => fake()->text(),
            // 2 decimals, min 5, max 500
            'unit_price' => fake()->randomFloat(2, 5, 500),
            'stock' => fake()->numberBetween(1, 100),
        ];
    }
}
