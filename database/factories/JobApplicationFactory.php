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
            'company_name' => fake()->company(),
            'job_title' => fake()->jobTitle(),
            'date_applied' => fake()->past('2 weeks'),
            'closing_date' => fake()->future('2 weeks')->date(),
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
