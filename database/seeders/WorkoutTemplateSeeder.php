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
            'name' => 'Workout Test',
            'user_id' => 1
        ]);
        DB::table('workout_template')->insert([
            'name' => 'push Test',
            'user_id' => 1
        ]);
        DB::table('workout_template')->insert([
            'name' => 'pull Test',
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
