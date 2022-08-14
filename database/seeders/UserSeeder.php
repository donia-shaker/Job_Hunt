<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'super_admin',
            'email' => 'super_admin@gamil.com',
            'password' => Hash::make('123456789'),
        ]);

        User::create([
            'name' => 'client_one',
            'email' => 'client_one@gamil.com',
            'password' => Hash::make('123456789'),
        ]);

        User::create([
            'name' => 'client_two',
            'email' => 'client_two@gamil.com',
            'password' => Hash::make('123456789'),
        ]);

        User::create([
            'name' => 'client_three',
            'email' => 'client_three@gamil.com',
            'password' => Hash::make('123456789'),
        ]);

        User::create([
            'name' => 'client_four',
            'email' => 'client_four@gamil.com',
            'password' => Hash::make('123456789'),
        ]);

        User::create([
            'name' => 'client_five',
            'email' => 'client_five@gamil.com',
            'password' => Hash::make('123456789'),
        ]);

        User::create([
            'name' => 'client_six',
            'email' => 'client_six@gamil.com',
            'password' => Hash::make('123456789'),
        ]);
    }
}
