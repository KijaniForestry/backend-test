<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class GardenTestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(2, true) . ' Garden',
            'center_point' => [
                'latitude' => fake()->latitude(2.0, 3.0),
                'longitude' => fake()->longitude(31.0, 34.0),
                'accuracy' => fake()->numberBetween(1, 10)
            ],
            'polygon' => [
                'type' => 'Polygon',
                'coordinates' => [
                    [
                        [fake()->longitude(31.0, 34.0), fake()->latitude(2.0, 3.0)],
                        [fake()->longitude(31.0, 34.0), fake()->latitude(2.0, 3.0)],
                        [fake()->longitude(31.0, 34.0), fake()->latitude(2.0, 3.0)],
                        [fake()->longitude(31.0, 34.0), fake()->latitude(2.0, 3.0)]
                    ]
                ]
            ],
            'farmer_id' => fake()->numberBetween(1, 1000),
            'status' => fake()->randomElement(['Active', 'Inactive', 'Pending', 'Completed']),
            'registered_by' => fake()->optional(0.8)->numberBetween(1, 100),
            'r_center_point' => fake()->optional(0.3)->randomElement([null, ['lat' => 2.5, 'lng' => 32.5]]),
            'r_status' => fake()->optional(0.4)->randomElement(['synced', 'pending', 'error']),
            'r_group_id' => fake()->optional(0.6)->numberBetween(1000, 9999),
            'r_farmer_id' => fake()->optional(0.7)->numberBetween(10000, 99999),
            'r_id' => fake()->optional(0.5)->numberBetween(1, 10000),
            'planted_date' => fake()->optional(0.7)->dateTimeBetween('-2 years', 'now'),
            'season_id' => fake()->optional(0.8)->numberBetween(1, 10),
            'r_total_trees' => fake()->optional(0.6)->numberBetween(50, 500),
            'tree_count' => fake()->optional(0.8)->numberBetween(20, 300),
            'tree_count_updated_at' => fake()->optional(0.5)->dateTimeBetween('-6 months', 'now'),
        ];
    }
}
