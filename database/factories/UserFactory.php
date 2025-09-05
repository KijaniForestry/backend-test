<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('password'),
            'status' => fake()->randomElement(['Pending', 'Active', 'Inactive', 'Suspended']),
            'email_verified_at' => fake()->optional(0.8)->dateTimeBetween('-1 year', 'now'),
            'remember_token' => Str::random(10),
            'phone2' => fake()->optional(0.3)->numerify('256#########'),
            'phone' => fake()->optional(0.9)->numerify('256#########'),
            'o_code' => fake()->optional(0.4)->regexify('[A-Z0-9]{6}'),
            'device_name' => fake()->optional(0.6)->randomElement(['iPhone 12', 'Samsung Galaxy S21', 'Google Pixel 6', 'OnePlus 9', 'Huawei P40']),
            'device_id' => fake()->optional(0.6)->uuid(),
            'other_name' => fake()->optional(0.4)->firstName(),
            'gender' => fake()->optional(0.8)->randomElement(['Male', 'Female', 'Other']),
            'employee_id' => fake()->optional(0.2)->numberBetween(1000, 9999),
            'assignment_id' => fake()->optional(0.3)->numberBetween(100, 999),
            'r_id' => fake()->optional(0.5)->numberBetween(10000, 99999),
            'r_role' => fake()->optional(0.3)->randomElement(['Admin', 'Manager', 'Staff', 'Field Officer']),
            'r_phone' => fake()->optional(0.4)->phoneNumber(),
            'last_seen_at' => fake()->optional(0.7)->dateTimeBetween('-1 month', 'now'),
            'profile_photo' => fake()->optional(0.5)->imageUrl(200, 200, 'people'),
        ];
    }

    /**
     * Indicate that the user's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    /**
     * Indicate that the user should be active.
     */
    public function active(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'Active',
            'email_verified_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ]);
    }

    /**
     * Indicate that the user should be pending.
     */
    public function pending(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'Pending',
            'email_verified_at' => null,
        ]);
    }
}
