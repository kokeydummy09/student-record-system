<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => $this->faker->name(),
            'date_of_birth' => $this->faker->dateTimeBetween('-25 years', '-18 years'),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'email' => $this->faker->unique()->safeEmail(),
            'course' => $this->faker->randomElement(['bscs', 'bsit', 'bsis']),
            'year_level' => $this->faker->numberBetween(1, 5),
        ];
    }
}
