<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Service>
 */
class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition(): array
    {
        $services = [
            'Web Development',
            'Live Streaming Setup',
            'Media Production',
            'UI/UX Design',
        ];

        $icons = [
            'code',
            'camera',
            'video',
            'palette',
        ];

        return [
            'title' => fake()->randomElement($services),
            'description' => fake()->paragraph(),
            'icon' => fake()->randomElement($icons),
        ];
    }
}
