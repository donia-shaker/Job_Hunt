<?php

namespace Database\Seeders;

use App\Models\Companies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Companies::create([
            'name' => [
                'ar' => 'nonstop',
                'en' => 'nonstop'
            ],
            'image' => 'job-1.jpg',
            'phone' => '777 777 777',
            'address'=>[
                'ar' => 'العنوان',
                'en' => 'addree'
            ]
        ]);

        Companies::create([
            'name' => [
                'ar' => 'mencap',
                'en' => 'mencap'
            ],
            'image' => 'job-2.jpg',
            'phone' => '777 777 777',
            'address'=>[
                'ar' => 'العنوان',
                'en' => 'addree'
            ]
        ]);

        Companies::create([
            'name' => [
                'ar' => 'mencap',
                'en' => 'mencap'
            ],
            'image' => 'job-3.jpg',
            'phone' => '777 777 777',
            'address'=>[
                'ar' => 'العنوان',
                'en' => 'addree'
            ]
        ]);

        Companies::create([
            'name' => [
                'ar' => 'مايكروسوفت',
                'en' => 'microsoft'
            ],
            'image' => 'job-1.jpg',
            'phone' => '777 777 777',
            'address'=>[
                'ar' => 'العنوان',
                'en' => 'addree'
            ]
        ]);
    }
}
