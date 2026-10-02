<?php

namespace Database\Factories;

use App\Models\airlines;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<airlines>
 */
class AirlinesFactory extends Factory
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
            'country' => fake()->country(),
        ];
    }
}
