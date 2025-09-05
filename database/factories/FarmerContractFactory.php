<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FarmerContractFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->words(4, true),
            'farmer_id' => fake()->numberBetween(1, 1000),
            'garden_id' => fake()->numberBetween(1, 500),
            'land_owner_first_name' => fake()->optional(0.9)->firstName(),
            'land_owner_last_name' => fake()->optional(0.9)->lastName(),
            'land_owner_other_name' => fake()->optional(0.3)->firstName(),
            'beneficiary_first_name' => fake()->optional(0.8)->firstName(),
            'beneficiary_last_name' => fake()->optional(0.8)->lastName(),
            'witness_name' => fake()->optional(0.7)->name(),
            'photos' => fake()->optional(0.6)->randomElement([
                ['contract_page1.jpg', 'contract_page2.jpg'],
                ['signed_contract.pdf'],
                null
            ]),
            'sign_date' => fake()->optional(0.8)->dateTimeBetween('-1 year', 'now'),
            'contract_end' => fake()->optional(0.7)->dateTimeBetween('now', '+5 years'),
            'staff_id' => fake()->optional(0.8)->numberBetween(1, 100),
        ];
    }
}
