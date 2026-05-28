<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition(): array
    {
        $title = fake()->sentence(3);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => fake()->paragraphs(3, true),
            'thumbnail' => 'https://picsum.photos/seed/' . fake()->uuid() . '/800/600',
            'github_url' => 'https://github.com/username/' . Str::slug($title),
            'demo_url' => 'https://' . Str::slug($title) . '.example.com',
            'status' => 'active',
        ];
    }
}
