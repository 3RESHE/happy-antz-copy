<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(
            PlanSeeder::class,
        );
        // // Talent
        // $talent = User::create([
        //     'name' => 'John Doe',
        //     'email' => 'talent@example.com',
        //     'password' => Hash::make('password'),
        //     'role' => 'talent',
        // ]);
        // $talent->talentProfile()->create([
        //     'complete_name' => 'John Doe',
        //     'phone_number' => '1234567890',
        //     'city_address' => 'New York',
        // ]);

        // // Employer
        // $employer = User::create([
        //     'name' => 'Jane Smith',
        //     'email' => 'employer@example.com',
        //     'password' => Hash::make('password'),
        //     'role' => 'employer',
        // ]);
        // $employer->employerProfile()->create([
        //     'complete_name' => 'Jane Smith',
        //     'position' => 'CEO',
        //     'company_name' => 'Example Inc.',
        //     'company_address' => 'New York',
        //     'company_email' => 'example@inc.com',
        //     'company_phone' => '1234567890',
        // ]);
        // $employer->jobPosts()->create([
        //     'title' => 'Software Engineer',
        //     'description' => 'Build cool stuff.',
        //     'location' => 'remote',
        //     'salary_range' => '$80k-$120k',
        //     'deadline' => now()->addWeek(),
        //     'type' => 'internship',
        // ]);
    }
}
