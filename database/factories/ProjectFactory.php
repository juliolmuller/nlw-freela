<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'description' => fake()->randomHtml(),
            'status' => fake()->randomElement([
                'created',
                'published',
                'closed',
                'cancelled'
            ]),
            'tech_stack' => fake()->randomElements([
                'Angular',
                'Angular.js',
                'ASP.NET',
                'Bun.js',
                'C',
                'C#',
                'C++',
                'CSS',
                'Deno.js',
                'Excel',
                'Flutter',
                'Go',
                'HTML',
                'Java',
                'JavaScript',
                'Kotlin',
                'Laravel',
                'Nest.js',
                'Next.js',
                'Node.js',
                'Nuxt.js',
                'PHP',
                'Python',
                'React Native',
                'React.js',
                'Ruby on Rails',
                'Ruby',
                'Rust',
                'Solid.js',
                'SQL',
                'Svelte.js',
                'Swift',
                'TypeScript',
                'VB.NET',
                'VBA',
                'Vue.js',
                'WordPress',
            ], random_int(1, 5)),
            'created_at' => fake()->dateTimeBetween('-7 days', 'now'),
            'ends_at' => fake()->dateTimeBetween('-3 days', '+5 days'),
            'created_by' => User::factory(),
        ];
    }
}
