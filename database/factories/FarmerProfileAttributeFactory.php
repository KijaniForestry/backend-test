<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FarmerProfileAttributeTestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->slug(2),
            'label' => fake()->words(2, true),
            'description' => fake()->optional(0.7)->sentence(),
            'data_type_id' => fake()->optional(0.8)->numberBetween(1, 10),
            'validation' => fake()->optional(0.5)->randomElement([
                ['required' => true],
                ['min' => 3, 'max' => 50],
                ['numeric' => true],
                null
            ]),
            'reference_model' => fake()->optional(0.2)->randomElement(['User', 'Group', 'Season']),
            'display_field' => fake()->optional(0.3)->randomElement(['name', 'title', 'label']),
            'value_field' => fake()->optional(0.3)->randomElement(['id', 'value', 'code']),
            'additional_fields' => fake()->optional(0.3)->randomElement([
                ['placeholder' => 'Enter value'],
                ['help_text' => 'Additional information'],
                null
            ]),
            'ui_component' => fake()->optional(0.6)->randomElement(['text', 'select', 'radio', 'checkbox', 'textarea']),
        ];
    }
}
