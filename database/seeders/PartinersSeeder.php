<?php

namespace Database\Seeders;

use App\Models\Partiners;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartinersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partiners::create([
            'name' => [
                'ar' => 'Pepsi',
                'en' => 'Pepsi'
            ],
            'image' => 'comp-2.jpg',
            'phone' => '777 777 777',
            'address'=>[
                'ar' => 'العنوان',
                'en' => 'addree'
            ],
            'information'=>[
                'ar' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, incidunt tempore. Eligendi nesciunt iure, eum iste illum voluptatem ex architecto quisquam a, sed explicabo officiis impedit autem provident recusandae aspernatur.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, incidunt tempore. Eligendi nesciunt iure, eum iste illum voluptatem ex architecto quisquam a, sed explicabo officiis impedit autem provident recusandae aspernatur.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, incidunt tempore. Eligendi nesciunt iure, eum iste illum voluptatem ex architecto quisquam a, sed explicabo officiis impedit autem provident recusandae aspernatur.
                ',
                'en' => '
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, incidunt tempore. Eligendi nesciunt iure, eum iste illum voluptatem ex architecto quisquam a, sed explicabo officiis impedit autem provident recusandae aspernatur.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, incidunt tempore. Eligendi nesciunt iure, eum iste illum voluptatem ex architecto quisquam a, sed explicabo officiis impedit autem provident recusandae aspernatur.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, incidunt tempore. Eligendi nesciunt iure, eum iste illum voluptatem ex architecto quisquam a, sed explicabo officiis impedit autem provident recusandae aspernatur.'
            ],
        ]);

        Partiners::create([
            'name' => [
                'ar' => 'Cisco',
                'en' => 'Cisco'
            ],
            'image' => 'comp-3.png',
            'phone' => '777 777 777',
            'address'=>[
                'ar' => 'العنوان',
                'en' => 'addree'
            ],
            'information'=>[
                'ar' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, incidunt tempore. Eligendi nesciunt iure, eum iste illum voluptatem ex architecto quisquam a, sed explicabo officiis impedit autem provident recusandae aspernatur.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, incidunt tempore. Eligendi nesciunt iure, eum iste illum voluptatem ex architecto quisquam a, sed explicabo officiis impedit autem provident recusandae aspernatur.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, incidunt tempore. Eligendi nesciunt iure, eum iste illum voluptatem ex architecto quisquam a, sed explicabo officiis impedit autem provident recusandae aspernatur.',
                'en' => '
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, incidunt tempore. Eligendi nesciunt iure, eum iste illum voluptatem ex architecto quisquam a, sed explicabo officiis impedit autem provident recusandae aspernatur.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, incidunt tempore. Eligendi nesciunt iure, eum iste illum voluptatem ex architecto quisquam a, sed explicabo officiis impedit autem provident recusandae aspernatur.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, incidunt tempore. Eligendi nesciunt iure, eum iste illum voluptatem ex architecto quisquam a, sed explicabo officiis impedit autem provident recusandae aspernatur.'
            ],
        ]);

        Partiners::create([
            'name' => [
                'ar' => 'Company',
                'en' => 'Company'
            ],
            'image' => 'comp-1.png',
            'phone' => '777 777 777',
            'address'=>[
                'ar' => 'العنوان',
                'en' => 'addree'
            ],
            'information'=>[
                'ar' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, incidunt tempore. Eligendi nesciunt iure, eum iste illum voluptatem ex architecto quisquam a, sed explicabo officiis impedit autem provident recusandae aspernatur.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, incidunt tempore. Eligendi nesciunt iure, eum iste illum voluptatem ex architecto quisquam a, sed explicabo officiis impedit autem provident recusandae aspernatur.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, incidunt tempore. Eligendi nesciunt iure, eum iste illum voluptatem ex architecto quisquam a, sed explicabo officiis impedit autem provident recusandae aspernatur.',
                'en' => '
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, incidunt tempore. Eligendi nesciunt iure, eum iste illum voluptatem ex architecto quisquam a, sed explicabo officiis impedit autem provident recusandae aspernatur.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, incidunt tempore. Eligendi nesciunt iure, eum iste illum voluptatem ex architecto quisquam a, sed explicabo officiis impedit autem provident recusandae aspernatur.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, incidunt tempore. Eligendi nesciunt iure, eum iste illum voluptatem ex architecto quisquam a, sed explicabo officiis impedit autem provident recusandae aspernatur.'
            ],
        ]);

        Partiners::create([
            'name' => [
                'ar' => 'Toyota',
                'en' => 'Toyota'
            ],
            'image' => 'comp-4.jpg',
            'phone' => '777 777 777',
            'address'=>[
                'ar' => 'العنوان',
                'en' => 'addree'
            ],
            'information'=>[
                'ar' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, incidunt tempore. Eligendi nesciunt iure, eum iste illum voluptatem ex architecto quisquam a, sed explicabo officiis impedit autem provident recusandae aspernatur.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, incidunt tempore. Eligendi nesciunt iure, eum iste illum voluptatem ex architecto quisquam a, sed explicabo officiis impedit autem provident recusandae aspernatur.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, incidunt tempore. Eligendi nesciunt iure, eum iste illum voluptatem ex architecto quisquam a, sed explicabo officiis impedit autem provident recusandae aspernatur.',
                'en' => '
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, incidunt tempore. Eligendi nesciunt iure, eum iste illum voluptatem ex architecto quisquam a, sed explicabo officiis impedit autem provident recusandae aspernatur.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, incidunt tempore. Eligendi nesciunt iure, eum iste illum voluptatem ex architecto quisquam a, sed explicabo officiis impedit autem provident recusandae aspernatur.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, incidunt tempore. Eligendi nesciunt iure, eum iste illum voluptatem ex architecto quisquam a, sed explicabo officiis impedit autem provident recusandae aspernatur.'
            ],
        ]);
    }
}

