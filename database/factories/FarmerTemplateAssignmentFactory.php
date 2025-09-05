<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FarmerTemplateAssignmentTestFactory extends Factory
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
            'template_id' => fake()->numberBetween(1, 20),
            'assigned_at' => fake()->optional(0.8)->dateTimeBetween('-1 year', 'now'),
            'assigned_by' => fake()->optional(0.7)->numberBetween(1, 100),
            'profile_template_status' => fake()->randomElement(['Pending', 'In Progress', 'Completed', 'Cancelled']),
            'season_id' => fake()->optional(0.6)->numberBetween(1, 10),
        ];
    }
}
