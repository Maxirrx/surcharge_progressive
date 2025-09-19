<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkoutTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('workout_template')->insert([
            'name' => 'Push',
            'user_id' => 1
        ]);
        DB::table('workout_template')->insert([
            'name' => 'Pull',
            'user_id' => 1
        ]);
        DB::table('workout_template')->insert([
            'name' => 'Leg',
            'user_id' => 1
        ]);
        DB::table('workout_template')->insert([
            'name' => 'push',
            'user_id' => 2
        ]);
        DB::table('workout_template')->insert([
            'name' => 'pull',
            'user_id' => 2
        ]);
        DB::table('workout_template')->insert([
            'name' => 'legs',
            'user_id' => 2
        ]);
    }
}
