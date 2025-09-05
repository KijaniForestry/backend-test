<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FarmerProfileTemplateTestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(3, true),
            'description' => fake()->optional(0.8)->paragraph(),
            'conditional_logic' => fake()->optional(0.3)->randomElement([
                ['field' => 'gender', 'operator' => '=', 'value' => 'Male'],
                ['field' => 'age', 'operator' => '>', 'value' => 18],
                null
            ]),
            'is_active' => fake()->boolean(80),
            'created_by' => fake()->optional(0.7)->numberBetween(1, 100),
        ];
    }
}
