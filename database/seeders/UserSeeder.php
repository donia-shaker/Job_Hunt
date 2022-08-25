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
            'email' => 'super_admin@gamil.com',
            'password' => Hash::make('123456789'),
            'remember_token'=> Str::uuid(),
        ]);
        $supet_admin->attachRole('super_admin');

        $client_one = User::create([
            'name' => 'client_one',
            'email' => 'client_one@gamil.com',
            'password' => Hash::make('123456789'),
            'remember_token'=> Str::uuid(),
        ]);
        $client_one->attachRole('client');

        $client_two = User::create([
            'name' => 'client_two',
            'email' => 'client_two@gamil.com',
            'password' => Hash::make('123456789'),
            'remember_token'=> Str::uuid(),
        ]);
        $client_two->attachRole('client');

        $client_three = User::create([
            'name' => 'client_three',
            'email' => 'client_three@gamil.com',
            'password' => Hash::make('123456789'),
            'remember_token'=> Str::uuid(),
        ]);
        $client_three->attachRole('client');

        $client_four = User::create([
            'name' => 'client_four',
            'email' => 'client_four@gamil.com',
            'password' => Hash::make('123456789'),
            'remember_token'=> Str::uuid(),
        ]);
        $client_four->attachRole('client');

        $client_five = User::create([
            'name' => 'client_five',
            'email' => 'client_five@gamil.com',
            'password' => Hash::make('123456789'),
            'remember_token'=> Str::uuid(),
        ]);
        $client_five->attachRole('client');

        $client_six = User::create([
            'name' => 'client_six',
            'email' => 'client_six@gamil.com',
            'password' => Hash::make('123456789'),
            'remember_token'=> Str::uuid(),
        ]);
        $client_six->attachRole('client');

    }
}
