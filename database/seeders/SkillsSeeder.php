<?php

namespace Database\Seeders;

use App\Models\Skills;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skills::create([
            'name' => 'Html & Css',
            'user_id' => 2,
        ]);

        Skills::create([
            'name' => 'JavaScript',
            'user_id' => 2,
        ]);

        Skills::create([
            'name' => 'Bootstrap',
            'user_id' => 2,
        ]);

        Skills::create([
            'name' => 'Html & Css',
            'user_id' => 3,
        ]);

        Skills::create([
            'name' => 'php',
            'user_id' => 3,
        ]);

        Skills::create([
            'name' => 'Laravel',
            'user_id' => 3,
        ]);

        Skills::create([
            'name' => 'Html & CSS',
            'user_id' => 4,
        ]);

        Skills::create([
            'name' => 'Tailwind',
            'user_id' => 4,
        ]);

        Skills::create([
            'name' => 'js',
            'user_id' => 4,
        ]);
    }
}
