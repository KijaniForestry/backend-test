<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FarmerProfileAttributeValueTestFactory extends Factory
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
            'farmer_profile_attribute_id' => fake()->numberBetween(1, 50),
            'value_string' => fake()->optional(0.6)->words(3, true),
            'value_number' => fake()->optional(0.3)->randomFloat(2, 0, 1000),
            'value_date' => fake()->optional(0.2)->date(),
            'value_boolean' => fake()->optional(0.2)->boolean(),
            'value_json' => fake()->optional(0.1)->randomElement([
                ['options' => ['A', 'B', 'C']],
                ['coordinates' => ['lat' => 2.5, 'lng' => 32.5]],
                null
            ]),
            'updated_by' => fake()->optional(0.7)->numberBetween(1, 100),
        ];
    }
}
