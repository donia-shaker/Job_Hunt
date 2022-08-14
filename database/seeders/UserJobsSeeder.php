<?php

namespace Database\Seeders;

use App\Models\UsersJobs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserJobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UsersJobs::create([
            'user_id'   => 2,
            'job_id'    => 9
        ]);

        UsersJobs::create([
            'user_id'   => 3,
            'job_id'    => 3
        ]);

        UsersJobs::create([
            'user_id'   => 2,
            'job_id'    => 3
        ]);

        UsersJobs::create([
            'user_id'   => 3,
            'job_id'    => 1
        ]);

        UsersJobs::create([
            'user_id'   => 4,
            'job_id'    => 4
        ]);

        UsersJobs::create([
            'user_id'   => 2,
            'job_id'    => 2
        ]);

        UsersJobs::create([
            'user_id'   => 2,
            'job_id'    => 1
        ]);

        UsersJobs::create([
            'user_id'   => 5,
            'job_id'    => 5
        ]);

        UsersJobs::create([
            'user_id'   => 5,
            'job_id'    => 1
        ]);
    }
}
