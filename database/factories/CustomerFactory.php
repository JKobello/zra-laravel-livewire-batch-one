<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        
        
        return [
            'name'            => fake()->name(),
            'company_name'    => fake()->company(),
            'email'           => fake()->unique()->safeEmail(),
            'phone_number'    => fake()->phoneNumber(),
            'account_balance' => fake()->randomFloat(2, 0, 10000), // 2 decimals, range 0–10,000
            'country'         => fake()->country(),
];

    }
}
