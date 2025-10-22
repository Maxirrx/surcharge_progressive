<?php

namespace Database\Seeders;

use Carbon\Traits\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkoutSessionSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('workout_session')->insert([
            // --- Semaine 1 ---
            ['id' => 1, 'user_id' => 1, 'workout_id' => null, 'dateofworkout' => '2025-09-15', 'isfinished' => true], // Pec
            ['id' => 2, 'user_id' => 1, 'workout_id' => null, 'dateofworkout' => '2025-09-16', 'isfinished' => true], // Pull
            ['id' => 3, 'user_id' => 1, 'workout_id' => null, 'dateofworkout' => '2025-09-17', 'isfinished' => true], // Legs
            ['id' => 4, 'user_id' => 1, 'workout_id' => null, 'dateofworkout' => '2025-09-19', 'isfinished' => true], // Push
            ['id' => 5, 'user_id' => 1, 'workout_id' => null, 'dateofworkout' => '2025-09-20', 'isfinished' => true], // Pull
            ['id' => 6, 'user_id' => 1, 'workout_id' => null, 'dateofworkout' => '2025-09-21', 'isfinished' => true], // Legs

            // --- Semaine 2 ---
            ['id' => 7, 'user_id' => 1, 'workout_id' => null, 'dateofworkout' => '2025-09-22', 'isfinished' => true], // Push
            ['id' => 8, 'user_id' => 1, 'workout_id' => null, 'dateofworkout' => '2025-09-23', 'isfinished' => true], // Pull
            ['id' => 9, 'user_id' => 1, 'workout_id' => null, 'dateofworkout' => '2025-09-24', 'isfinished' => true], // Legs
            ['id' => 10, 'user_id' => 1, 'workout_id' => null, 'dateofworkout' => '2025-09-26', 'isfinished' => true], // Push
            ['id' => 11, 'user_id' => 1, 'workout_id' => null, 'dateofworkout' => '2025-09-27', 'isfinished' => true], // Pull
            ['id' => 12, 'user_id' => 1, 'workout_id' => null, 'dateofworkout' => '2025-09-28', 'isfinished' => true], // Legs
            ['id' => 13, 'user_id' => 1, 'workout_id' => null, 'dateofworkout' => '2025-09-29', 'isfinished' => true], // Push
            ['id' => 14, 'user_id' => 1, 'workout_id' => null, 'dateofworkout' => '2025-09-30', 'isfinished' => true], // Pull

            // --- Semaine 3 ---
            ['id' => 15, 'user_id' => 1, 'workout_id' => null, 'dateofworkout' => '2025-10-01', 'isfinished' => true], // Legs
            ['id' => 16, 'user_id' => 1, 'workout_id' => null, 'dateofworkout' => '2025-10-03', 'isfinished' => true], // Push
            ['id' => 17, 'user_id' => 1, 'workout_id' => null, 'dateofworkout' => '2025-10-06', 'isfinished' => true], // Push
            ['id' => 18, 'user_id' => 1, 'workout_id' => null, 'dateofworkout' => '2025-10-07', 'isfinished' => true], // Détente / triceps
            ['id' => 19, 'user_id' => 1, 'workout_id' => null, 'dateofworkout' => '2025-10-13', 'isfinished' => true], // Push
            ['id' => 20, 'user_id' => 1, 'workout_id' => null, 'dateofworkout' => '2025-10-14', 'isfinished' => true], // Pull
            ['id' => 21, 'user_id' => 1, 'workout_id' => null, 'dateofworkout' => '2025-10-15', 'isfinished' => true], // Legs
            ['id' => 22, 'user_id' => 1, 'workout_id' => null, 'dateofworkout' => '2025-10-17', 'isfinished' => true], // Push
            ['id' => 23, 'user_id' => 1, 'workout_id' => null, 'dateofworkout' => '2025-10-18', 'isfinished' => true], // Push
        ]);
    }
}
