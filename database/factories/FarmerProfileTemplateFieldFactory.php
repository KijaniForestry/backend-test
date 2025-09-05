<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FarmerProfileTemplateFieldTestFactory extends Factory
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
            'field_name' => fake()->unique()->slug(2),
            'field_type' => fake()->randomElement(['text', 'number', 'date', 'select', 'radio', 'checkbox', 'textarea', 'file']),
            'required' => fake()->boolean(40),
            'options' => fake()->optional(0.4)->randomElement([
                ['Option 1', 'Option 2', 'Option 3'],
                ['Yes', 'No'],
                ['Small', 'Medium', 'Large'],
                null
            ]),
            'validation_rules' => fake()->optional(0.6)->randomElement([
                ['required', 'string', 'max:255'],
                ['nullable', 'numeric'],
                ['required', 'date'],
                null
            ]),
            'description' => fake()->optional(0.6)->sentence(),
            'display_order' => fake()->numberBetween(1, 20),
            'label' => fake()->words(2, true),
        ];
    }
}
