<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FarmerProfileValueTestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'profile_template_field_id' => fake()->optional(0.8)->numberBetween(1, 100),
            'value' => fake()->optional(0.9)->words(fake()->numberBetween(1, 5), true),
            'updated_by' => fake()->optional(0.7)->numberBetween(1, 100),
            'farmer_template_assignment_id' => fake()->optional(0.8)->numberBetween(1, 500),
            'attribute_value_id' => fake()->optional(0.5)->numberBetween(1, 1000),
        ];
    }
}
