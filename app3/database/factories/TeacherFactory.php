<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullname' =>  $this->faker->name() ,
            'registration'=> $this->faker->ean13(),
            'competence' =>  $this->faker->randomElement($array = array ('Portugues','Ingles','Matematica','Sociologia',' Programação')),
            'scholarity' => $this->faker->randomElement($array = array ('Ensino médio completo','Ensino superior completo','Pós graduação')),
            'user_id'   => User::factory()->create()->id,
        ];
    }
}
