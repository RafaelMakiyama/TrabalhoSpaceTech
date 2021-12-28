<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'num_lesson' => $this->faker->numberBetween(1,1000),
            'theme' => $this->faker->name(),
            'duration' => $this->faker->numberBetween(1,100),
            'obs' => $this->faker->word(1),
            'course_id' => $this->faker->numberBetween(1,8),
            'teacher_id' => $this->faker->numberBetween(1,1),
        ];
    }
}
