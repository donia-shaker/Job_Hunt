<?php

namespace Database\Seeders;

use App\Models\UserProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserProfile::create([
            'avatar'     =>'default_image.png',
            'phone'     =>'777 777 776',
            'address'   =>'Yemen,Sanaa',
            'user_id'   => 2,
        ]);

        UserProfile::create([
            'avatar'     =>'default_image.png',
            'phone'     =>'777 777 775',
            'address'   =>'Yemen,Sanaa',
            'user_id'   => 3,
        ]);

        UserProfile::create([
            'avatar'     =>'default_image.png',
            'phone'     =>'777 777 774',
            'address'   =>'Yemen,Sanaa',
            'user_id'   => 4,
        ]);

        UserProfile::create([
            'avatar'     =>'default_image.png',
            'phone'     =>'777 777 773',
            'address'   =>'Yemen,Sanaa',
            'user_id'   => 5,
        ]);
    }
}
