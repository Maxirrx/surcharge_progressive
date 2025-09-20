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
            ['id' => 1, 'user_id' => 1, 'workout_id' => 1, 'dateofworkout' => '2025-09-15', 'isfinished' => true],
            ['id' => 2, 'user_id' => 1, 'workout_id' => 2, 'dateofworkout' => '2025-09-16', 'isfinished' => true],

        ]);

        DB::table("workout_session")->insert([
            ['id' => 100, 'user_id' => 2, 'workout_id' => 4, 'dateofworkout' => '2025-09-01', 'isfinished' => true],
            ['id' => 101, 'user_id' => 2, 'workout_id' => 4, 'dateofworkout' => '2025-09-02', 'isfinished' => true],
            ['id' => 102, 'user_id' => 2, 'workout_id' => 4, 'dateofworkout' => '2025-09-03', 'isfinished' => true],
            ['id' => 103, 'user_id' => 2, 'workout_id' => 4, 'dateofworkout' => '2025-09-04', 'isfinished' => true],
            ['id' => 104, 'user_id' => 2, 'workout_id' => 4, 'dateofworkout' => '2025-09-05', 'isfinished' => true],
            ['id' => 105, 'user_id' => 2, 'workout_id' => 5, 'dateofworkout' => '2025-09-06', 'isfinished' => true],
            ['id' => 106, 'user_id' => 2, 'workout_id' => 5, 'dateofworkout' => '2025-09-07', 'isfinished' => true],
            ['id' => 107, 'user_id' => 2, 'workout_id' => 5, 'dateofworkout' => '2025-09-08', 'isfinished' => true],
            ['id' => 108, 'user_id' => 2, 'workout_id' => 5, 'dateofworkout' => '2025-09-09', 'isfinished' => true],
            ['id' => 109, 'user_id' => 2, 'workout_id' => 5, 'dateofworkout' => '2025-09-10', 'isfinished' => true],
            ['id' => 110, 'user_id' => 2, 'workout_id' => 6, 'dateofworkout' => '2025-09-11', 'isfinished' => true],
            ['id' => 111, 'user_id' => 2, 'workout_id' => 6, 'dateofworkout' => '2025-09-12', 'isfinished' => true],
            ['id' => 112, 'user_id' => 2, 'workout_id' => 6, 'dateofworkout' => '2025-09-13', 'isfinished' => true],
            ['id' => 113, 'user_id' => 2, 'workout_id' => 6, 'dateofworkout' => '2025-09-14', 'isfinished' => true],
            ['id' => 114, 'user_id' => 2, 'workout_id' => 6, 'dateofworkout' => '2025-09-15', 'isfinished' => true],
            ['id' => 115, 'user_id' => 2, 'workout_id' => 6, 'dateofworkout' => '2025-09-16', 'isfinished' => true],
            ['id' => 116, 'user_id' => 2, 'workout_id' => 6, 'dateofworkout' => '2025-10-18', 'isfinished' => false],
        ]);


    }
}
