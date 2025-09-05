<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FarmerGroupTestFactory extends Factory
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
            'group_id' => fake()->numberBetween(1, 200),
            'joined_at' => fake()->optional(0.9)->dateTimeBetween('-2 years', 'now'),
            'left_at' => fake()->optional(0.1)->dateTimeBetween('-1 year', 'now'),
            'status' => fake()->randomElement(['Active', 'Inactive', 'Left', 'Suspended']),
        ];
    }
}
