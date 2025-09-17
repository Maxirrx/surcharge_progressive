<?php

namespace Database\Seeders;

use Carbon\Traits\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkoutSessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("workout_session")->insert([
            ['user_id' => 2,
                'workout_id' => 4,
                'dateofworkout' => '2025-09-01',
                'isfinished' => true]
        ]);
        DB::table("workout_session")->insert([
            ['user_id' => 2,
                'workout_id' => 4,
                'dateofworkout' => '2025-09-02',
                'isfinished' => true]
        ]);
        DB::table("workout_session")->insert([
            ['user_id' => 2,
                'workout_id' => 4,
                'dateofworkout' => '2025-09-03',
                'isfinished' => true]
        ]);
        DB::table("workout_session")->insert([
            ['user_id' => 2,
                'workout_id' => 4,
                'dateofworkout' => '2025-09-04',
                'isfinished' => true]
        ]);
        DB::table("workout_session")->insert([
            ['user_id' => 2,
                'workout_id' => 4,
                'dateofworkout' => '2025-09-05',
                'isfinished' => true]
        ]);
        DB::table("workout_session")->insert([
            ['user_id' => 2, 'workout_id' => 5, 'dateofworkout' => '2025-09-06', 'isfinished' => true]
        ]);
        DB::table("workout_session")->insert([
            ['user_id' => 2, 'workout_id' => 5, 'dateofworkout' => '2025-09-07', 'isfinished' => true]
        ]);
        DB::table("workout_session")->insert([
            ['user_id' => 2, 'workout_id' => 5, 'dateofworkout' => '2025-09-08', 'isfinished' => true]
        ]);
        DB::table("workout_session")->insert([
            ['user_id' => 2, 'workout_id' => 5, 'dateofworkout' => '2025-09-09', 'isfinished' => true]
        ]);
        DB::table("workout_session")->insert([
            ['user_id' => 2, 'workout_id' => 5, 'dateofworkout' => '2025-09-10', 'isfinished' => true]
        ]);
        DB::table("workout_session")->insert([
            ['user_id' => 2, 'workout_id' => 6, 'dateofworkout' => '2025-09-11', 'isfinished' => true]
        ]);
        DB::table("workout_session")->insert([
            ['user_id' => 2, 'workout_id' => 6, 'dateofworkout' => '2025-09-12', 'isfinished' => true]
        ]);
        DB::table("workout_session")->insert([
            ['user_id' => 2, 'workout_id' => 6, 'dateofworkout' => '2025-09-13', 'isfinished' => true]
        ]);
        DB::table("workout_session")->insert([
            ['user_id' => 2, 'workout_id' => 6, 'dateofworkout' => '2025-09-14', 'isfinished' => true]
        ]);
        DB::table("workout_session")->insert([
            ['user_id' => 2, 'workout_id' => 6, 'dateofworkout' => '2025-09-15', 'isfinished' => true]
        ]);
        DB::table("workout_session")->insert([
            ['user_id' => 2, 'workout_id' => 6, 'dateofworkout' => '2025-10-18', 'isfinished' => false]
        ]);

    }
}
