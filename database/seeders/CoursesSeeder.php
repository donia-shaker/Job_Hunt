<?php

namespace Database\Seeders;

use App\Models\Courses;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Courses::create([
            'name'      =>  'Laravel',
            'place'     =>  'Rowad Foundation',
            'start'     =>  Carbon::create('2021', '06', '11'),
            'end'       =>  Carbon::create('2022', '06', '11'),
            'user_id'   =>  2
        ]);

        Courses::create([
            'name'      =>  'php',
            'place'     =>  'Rowad Foundation',
            'start'     =>  Carbon::create('2021', '06', '11'),
            'end'       =>  Carbon::create('2022', '06', '11'),
            'user_id'   =>  2
        ]);

        Courses::create([
            'name'      =>  'Vue',
            'place'     =>  'Rowad Foundation',
            'start'     =>  Carbon::create('2021', '06', '11'),
            'end'       =>  Carbon::create('2022', '06', '11'),
            'user_id'   =>  2
        ]);

        Courses::create([
            'name'      =>  'Laravel',
            'place'     =>  'Rowad Foundation',
            'start'     =>  Carbon::create('2021', '06', '11'),
            'end'       =>  Carbon::create('2022', '06', '11'),
            'user_id'   =>  3
        ]);

        Courses::create([
            'name'      =>  'JavaScript',
            'place'     =>  'Rowad Foundation',
            'start'     =>  Carbon::create('2021', '06', '11'),
            'end'       =>  Carbon::create('2022', '06', '11'),
            'user_id'   =>  3
        ]);

        Courses::create([
            'name'      =>  'HTML',
            'place'     =>  'Rowad Foundation',
            'start'     =>  Carbon::create('2021', '06', '11'),
            'end'       =>  Carbon::create('2022', '06', '11'),
            'user_id'   =>  3
        ]);

        Courses::create([
            'name'      =>  'HTML',
            'place'     =>  'Rowad Foundation',
            'start'     =>  Carbon::create('2021', '06', '11'),
            'end'       =>  Carbon::create('2022', '06', '11'),
            'user_id'   =>  4
        ]);

        Courses::create([
            'name'      =>  'CSS',
            'place'     =>  'Rowad Foundation',
            'start'     =>  Carbon::create('2021', '06', '11'),
            'end'       =>  Carbon::create('2022', '06', '11'),
            'user_id'   =>  4
        ]);

        Courses::create([
            'name'      =>  'Html',
            'place'     =>  'Rowad Foundation',
            'start'     =>  Carbon::create('2015', '06', '11'),
            'end'       =>  Carbon::create('2020', '06', '11'),
            'user_id'   =>  5
        ]);

        Courses::create([
            'name'      =>  'CSS',
            'place'     =>  'Rowad Foundation',
            'start'     =>  Carbon::create('2015', '06', '11'),
            'end'       =>  Carbon::create('2020', '06', '11'),
            'user_id'   =>  5
        ]);
    }
}
