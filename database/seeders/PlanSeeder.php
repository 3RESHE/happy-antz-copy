<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Talent plans
        Plan::create([
            'plan_name' => 'free',
            'role' => 'talent',
        ]);
        Plan::create([
            'plan_name' => 'pro',
            'role' => 'talent',
        ]);
        Plan::create([
            'plan_name' => 'premium',
            'role' => 'talent',
        ]);

        // Employer plans
        Plan::create([
            'plan_name' => 'free',
            'role' => 'employer',
        ]);
        Plan::create([
            'plan_name' => 'pro',
            'role' => 'employer',
        ]);
        Plan::create([
            'plan_name' => 'premium',
            'role' => 'employer',
        ]);
    }
}
