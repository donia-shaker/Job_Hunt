<?php

namespace Database\Seeders;

use App\Models\Education;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Education::create([
            'name'  =>'Communication & Electronics',
            'place' =>'Sanaa Univercity',
            'start' =>  Carbon::create('2018', '06', '11'),
            'end'   =>  Carbon::create('2022', '06', '11'),
            'user_id' => 2
        ]);

        Education::create([
            'name'  =>'Communication & Electronics',
            'place' =>'Sanaa Univercity',
            'start' =>  Carbon::create('2018', '06', '11'),
            'end'   =>  Carbon::create('2022', '06', '11'),
            'user_id' => 2
        ]);

        Education::create([
            'name'  =>'Communication & Electronics',
            'place' =>'Sanaa Univercity',
            'start' =>  Carbon::create('2018', '06', '11'),
            'end'   =>  Carbon::create('2022', '06', '11'),
            'user_id' => 2
        ]);

        Education::create([
            'name'  =>'Communication & Electronics',
            'place' =>'Sanaa Univercity',
            'start' =>  Carbon::create('2012', '06', '11'),
            'end'   =>  Carbon::create('2017', '06', '11'),
            'user_id' => 3
        ]);

        Education::create([
            'name'  =>'Communication & Electronics',
            'place' =>'Sanaa Univercity',
            'start' =>  Carbon::create('2012', '06', '11'),
            'end'   =>  Carbon::create('2017', '06', '11'),
            'user_id' => 3
        ]);

        Education::create([
            'name'  =>'Communication & Electronics',
            'place' =>'Sanaa Univercity',
            'start' =>  Carbon::create('2012', '06', '11'),
            'end'   =>  Carbon::create('2017', '06', '11'),
            'user_id' => 3
        ]);

        Education::create([
            'name'  =>'Communication & Electronics',
            'place' =>'Sanaa Univercity',
            'start' =>  Carbon::create('2012', '06', '11'),
            'end'   =>  Carbon::create('2017', '06', '11'),
            'user_id' => 4
        ]);

        Education::create([
            'name'  =>'Communication & Electronics',
            'place' =>'Sanaa Univercity',
            'start' =>  Carbon::create('2010', '06', '11'),
            'end'   =>  Carbon::create('2015', '06', '11'),
            'user_id' => 4
        ]);

        Education::create([
            'name'  =>'Communication & Electronics',
            'place' =>'Sanaa Univercity',
            'start' =>  Carbon::create('2010', '06', '11'),
            'end'   =>  Carbon::create('2015', '06', '11'),
            'user_id' => 4
        ]);

        Education::create([
            'name'  =>'Communication & Electronics',
            'place' =>'Sanaa Univercity',
            'start' =>  Carbon::create('2010', '06', '11'),
            'end'   =>  Carbon::create('2015', '06', '11'),
            'user_id' => 4
        ]);

        Education::create([
            'name'  =>'Communication & Electronics',
            'place' =>'Sanaa Univercity',
            'start' =>  Carbon::create('2015', '06', '11'),
            'end'   =>  Carbon::create('2020', '06', '11'),
            'user_id' => 5
        ]);

        Education::create([
            'name'  =>'Communication & Electronics',
            'place' =>'Sanaa Univercity',
            'start' =>  Carbon::create('2015', '06', '11'),
            'end'   =>  Carbon::create('2020', '06', '11'),
            'user_id' => 5
        ]);

        Education::create([
            'name'  =>'Communication & Electronics',
            'place' =>'Sanaa Univercity',
            'start' =>  Carbon::create('2015', '06', '11'),
            'end'   =>  Carbon::create('2020', '06', '11'),
            'user_id' => 5
        ]);

    }
}
