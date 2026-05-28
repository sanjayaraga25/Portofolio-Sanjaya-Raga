<?php

namespace Database\Factories;

use App\Models\Skill;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Skill>
 */
class SkillFactory extends Factory
{
    protected $model = Skill::class;

    public function definition(): array
    {
        $categories = ['Frontend', 'Backend', 'Database', 'Tools', 'Streaming & Multimedia'];

        return [
            'name' => fake()->randomElement(['HTML', 'CSS', 'JavaScript', 'PHP', 'Laravel', 'Python', 'MySQL', 'Git', 'OBS Studio', 'React', 'Vue.js', 'TypeScript', 'Docker', 'Linux', 'Figma']),
            'category' => fake()->randomElement($categories),
            'percentage' => fake()->numberBetween(50, 100),
            'icon' => 'devicon-' . strtolower(fake()->randomElement(['html5', 'css3', 'javascript', 'php', 'laravel', 'python', 'mysql', 'git', 'react', 'vuejs', 'typescript', 'docker', 'linux', 'figma'])),
        ];
    }
}
