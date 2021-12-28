<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RuleSeeder::class,
            UserSeeder::class,
            CourseSeeder::class,
            FinancialPlanSeeder::class,
            TeacherSeeder::class,
            StudentSeeder::class,
            LessonSeeder::class
        ]);
    }
}
