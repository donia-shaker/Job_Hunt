<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(CompaniesSeeder::class);
        $this->call(CitiesSeeder::class);
        $this->call(JobsSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(UserProfileSeeder::class);
        $this->call(UserJobsSeeder::class);
        $this->call(EducationSeeder::class);
        $this->call(SkillsSeeder::class);
        $this->call(CoursesSeeder::class);
        $this->call(PartinersSeeder::class);
    }
}
