<?php

namespace Database\Factories;

use App\Models\airlines;
use App\Models\flights;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<flights>
 */
class FlightsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date'=> fake()->date(),
            'airline_id' => airlines::all()->random()->id, 
            'limit' => fake()->numberBetween(3,500),
        ];
    }
}
