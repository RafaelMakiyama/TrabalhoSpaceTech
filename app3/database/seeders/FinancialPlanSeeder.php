<?php

namespace Database\Seeders;

use App\Models\FinancialPlan;
use Illuminate\Database\Seeder;

class FinancialPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FinancialPlan::factory(5)->create();
    }
}
