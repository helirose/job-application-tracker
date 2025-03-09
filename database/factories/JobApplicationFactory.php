<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobApplication>
 */
class JobApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'company_name' => fake()->company(),
            'job_title' => fake()->jobTitle(),
            'date_applied' => fake()->dateTimeBetween('-2 weeks', 'now'),
            'closing_date' => fake()->dateTimeBetween('now', '+2 weeks'),
            'location' => fake()->randomElement([
                fake()->city(),
                'Remote',
            ]),
            'salary_min' => 20000,
            'salary_max' => 30000,
            'salary_type' => 'annual',
        ];
    }
}
