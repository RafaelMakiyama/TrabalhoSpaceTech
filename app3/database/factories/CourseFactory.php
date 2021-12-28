<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'quantities_max_students' => $this->faker->numberBetween(1, 10000),
            'description' => $this->faker->text(),
            'category' => $this->faker->word(1),
            'monthly' => $this->faker->numberBetween(1,1000),
            'status' => $this->faker->randomElement($array = array ('Ativado','Desativado'))
        ];
    }
}
