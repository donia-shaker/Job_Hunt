<?php

namespace Database\Seeders;

use App\Models\Cities;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cities::create([
            'name' => [
                'ar' => 'صنعاء',
                'en' => 'Sanaa'
            ]
        ]);

        Cities::create([
            'name' => [
                'ar' => 'تعز',
                'en' => 'Taiz'
            ]
        ]);

        Cities::create([
            'name' => [
                'ar' => 'عدن',
                'en' => 'Aden'
            ]
        ]);
    }
}
