<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ApplicationEvent>
 */
class ApplicationEventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'job_application_id' => JobApplication::factory(), // Links to a Job Application
            'status' => fake()->randomElement(['Applied', 'Phone Interview', 'Final Interview', 'Offer Received']),
            'event_date' => fake()->dateTimeBetween('-1 month', 'now'),
            'notes' => fake()->sentence(),
        ];
    }
}
