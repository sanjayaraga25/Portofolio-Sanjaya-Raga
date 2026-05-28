<?php

namespace Database\Factories;

use App\Models\Experience;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Experience>
 */
class ExperienceFactory extends Factory
{
    protected $model = Experience::class;

    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'company' => fake()->company(),
            'description' => fake()->paragraphs(2, true),
            'start_date' => fake()->date(),
            'end_date' => fake()->optional(0.7)->date(),
        ];
    }
}
