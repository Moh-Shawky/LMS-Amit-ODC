<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'course_name' => fake()->sentence(),
            'course_about' => fake()->paragraph(),
            'rating' => fake()->numberBetween(0,5),
            'price' => fake()->numberBetween(0, 5000),
            'user_ID' => fake()->randomNumber(),
            'assignment_ID' => fake()->randomNumber(),
        ];
    }
}
