<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'registration' => $this->faker->unique()->randomNumber(8),
            'fullname' => $this->faker->name,
            'birthday' => $this->faker->date('Y-m-d'),
            'financial_responsable' => $this->faker->name,
            'cpf' => $this->faker->randomElement([
                '56868248008',
                '27471893095',
                '17830688095',
                '71262131073',
                '29303114019']),
            'course_id' => $this->faker->numberBetween(1, 8),
            'financial_plan_id' => $this->faker->numberBetween(1, 5),
            'user_id'   => User::factory()->create()->id
        ];
    }
}
