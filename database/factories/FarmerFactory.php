<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Farmer>
 */
class FarmerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'registered_by_id' => fake()->optional(0.8)->numberBetween(1, 1000),
            'potential_farmer_id' => fake()->optional(0.3)->numberBetween(1, 500),
            'is_institution' => fake()->boolean(10), // 10% chance
            'farmer_photo' => fake()->optional(0.6)->imageUrl(300, 300, 'people'),
            'gender' => fake()->randomElement(['Male', 'Female']),
            'status' => fake()->randomElement(['Pending', 'Registered', 'Active', 'Inactive']),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'other_name' => fake()->optional(0.4)->firstName(),
            'phone' => fake()->optional(0.9)->numerify('256#########'),
            'phone2' => fake()->optional(0.2)->numerify('256#########'),
            'has_national_id' => fake()->boolean(70), // 70% chance
            'r_group_id' => fake()->optional(0.6)->numberBetween(1000, 9999),
            'r_pc_id' => fake()->optional(0.5)->numberBetween(100, 999),
            'r_farmer_id' => fake()->optional(0.7)->numberBetween(10000, 99999),
            'registered_date' => fake()->optional(0.8)->dateTimeBetween('-2 years', 'now'),
            'r_registered_by' => fake()->optional(0.6)->numberBetween(1, 500),
            'r_phone' => fake()->optional(0.4)->phoneNumber(),
            'dob' => fake()->optional(0.7)->dateTimeBetween('-80 years', '-18 years'),
        ];
    }

    /**
     * Create an active farmer
     */
    public function active(): static
    {
        return $this->state(fn(array $attributes) => [
            'status' => 'Active',
            'registered_date' => fake()->dateTimeBetween('-1 year', 'now'),
            'has_national_id' => true,
        ]);
    }

    /**
     * Create a pending farmer
     */
    public function pending(): static
    {
        return $this->state(fn(array $attributes) => [
            'status' => 'Pending',
            'registered_date' => null,
        ]);
    }

    /**
     * Create an institutional farmer
     */
    public function institution(): static
    {
        return $this->state(fn(array $attributes) => [
            'is_institution' => true,
            'first_name' => fake()->company(),
            'last_name' => fake()->companySuffix(),
        ]);
    }
}