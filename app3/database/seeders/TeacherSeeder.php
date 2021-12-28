<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teachers = \App\Models\Teacher::factory(10)->create();
        foreach($teachers as $teacher){
            $teacher->user->assignRole('teacher');
        }

    }
}
