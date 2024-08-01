<?php

namespace Database\Factories;

use App\Models\links;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<links>
 */
class LinksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'url' => fake()->url,
            'short_url' => fake()->regexify("[a-z0-9]{6}")
        ];
    }
}
