<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
{
    return [
        'invoice_number' => 'INV-' . $this->faker->unique()->numerify('####'),
        'customer_name' => $this->faker->name,
        'sale_date' => $this->faker->dateTimeThisYear,
        'total_amount' => $this->faker->numberBetween(10000, 200000),
        'discount' => $this->faker->numberBetween(0, 5000),
        'tax' => $this->faker->numberBetween(0, 3000),
        'net_amount' => $this->faker->numberBetween(10000, 200000),
        'payment_status' => $this->faker->randomElement(['Paid', 'Pending', 'Partial']),
        'payment_method' => $this->faker->randomElement(['Cash', 'Card', 'Mobile Money']),
        'notes' => $this->faker->sentence,
    ];
}
}
