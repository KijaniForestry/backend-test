<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FarmerProfileTemplateAttributeTestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'template_id' => fake()->numberBetween(1, 20),
            'attribute_id' => fake()->numberBetween(1, 50),
            'is_required' => fake()->boolean(30),
            'display_order' => fake()->numberBetween(1, 20),
            'metadata' => fake()->optional(0.4)->randomElement([
                ['section' => 'Personal Info'],
                ['conditional' => true, 'depends_on' => 'gender'],
                ['validation' => ['min' => 1, 'max' => 100]],
                null
            ]),
        ];
    }
}
