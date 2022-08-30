<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supet_admin = User::create([
            'name' => 'super_admin',
            'email' => 'super_admin@gmail.com',
            'password' => Hash::make('123456789'),
            'remember_token'=> Str::uuid(),
            'is_active'=> 1,
        ]);
        $supet_admin->attachRole('super_admin');

        $client_one = User::create([
            'name' => 'client_one',
            'email' => 'client_one@gmail.com',
            'password' => Hash::make('123456789'),
            'remember_token'=> Str::uuid(),
            'is_active'=> 1,
        ]);
        $client_one->attachRole('client');

        $client_two = User::create([
            'name' => 'client_two',
            'email' => 'client_two@gmail.com',
            'password' => Hash::make('123456789'),
            'remember_token'=> Str::uuid(),
            'is_active'=> 1,
        ]);
        $client_two->attachRole('client');

        $client_three = User::create([
            'name' => 'client_three',
            'email' => 'client_three@gmail.com',
            'password' => Hash::make('123456789'),
            'remember_token'=> Str::uuid(),
            'is_active'=> 1,
        ]);
        $client_three->attachRole('client');

        $client_four = User::create([
            'name' => 'client_four',
            'email' => 'client_four@gmail.com',
            'password' => Hash::make('123456789'),
            'remember_token'=> Str::uuid(),
            'is_active'=> 1,
        ]);
        $client_four->attachRole('client');

        $client_five = User::create([
            'name' => 'client_five',
            'email' => 'client_five@gmail.com',
            'password' => Hash::make('123456789'),
            'remember_token'=> Str::uuid(),
            'is_active'=> 1,
        ]);
        $client_five->attachRole('client');

        $client_six = User::create([
            'name' => 'client_six',
            'email' => 'client_six@gmail.com',
            'password' => Hash::make('123456789'),
            'remember_token'=> Str::uuid(),
            'is_active'=> 1,
        ]);
        $client_six->attachRole('client');

    }
}
