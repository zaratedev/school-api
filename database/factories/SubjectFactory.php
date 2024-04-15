<?php

namespace Database\Factories;

use App\Models\Classroom;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->bothify('???###'),
            'name' => $this->faker->sentence(2),
            'day' => $this->faker->randomElement(['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes']),
            'schedule' => $this->faker->time(),
            'description' => $this->faker->paragraph(),
            'classroom_id' => Classroom::factory(),
        ];
    }
}
