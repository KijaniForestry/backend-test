<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FarmerPaymentTestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'farmer_id' => fake()->numberBetween(1, 1000),
            'farmer_group_id' => fake()->optional(0.7)->numberBetween(1, 200),
            'status' => fake()->randomElement(['Pending', 'Approved', 'Paid', 'Failed', 'Cancelled']),
            'amount' => fake()->randomFloat(2, 10000, 500000),
            'mobile_money_phone' => fake()->optional(0.8)->numerify('256#########'),
            'payment_method' => fake()->optional(0.9)->randomElement(['Mobile Money', 'Bank Transfer', 'Cash', 'Cheque']),
            'approved_by' => fake()->optional(0.6)->numberBetween(1, 50),
        ];
    }
}
