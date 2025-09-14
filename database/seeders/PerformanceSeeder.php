<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerformanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("performance")->insert([
            'workout_id' => 1,
            'exercices_id' => 1,
            'numero_series' => 1,
            'poids' => 50,
            'nb_repetition' => 7,
        ]);
        DB::table("performance")->insert([
            'workout_id' => 1,
            'exercices_id' => 1,
            'numero_series' => 2,
            'poids' => 50,
            'nb_repetition' => 7,
        ]);
        DB::table("performance")->insert([
            'workout_id' => 1,
            'exercices_id' => 1,
            'numero_series' => 3,
            'poids' => 50,
            'nb_repetition' => 7,
        ]);
        DB::table("performance")->insert([
            'workout_id' => 1,
            'exercices_id' => 2,
            'numero_series' => 1,
            'poids' => 50,
            'nb_repetition' => 7,
        ]);
        DB::table("performance")->insert([
            'workout_id' => 1,
            'exercices_id' => 2,
            'numero_series' => 1,
            'poids' => 50,
            'nb_repetition' => 7,
        ]);
        DB::table("performance")->insert([
            'workout_id' => 1,
            'exercices_id' => 2,
            'numero_series' => 1,
            'poids' => 50,
            'nb_repetition' => 7,
        ]);
        DB::table("performance")->insert([
            'workout_id' => 1,
            'exercices_id' => 3,
            'numero_series' => 1,
            'poids' => 50,
            'nb_repetition' => 7,
        ]);
        DB::table("performance")->insert([
            'workout_id' => 1,
            'exercices_id' => 3,
            'numero_series' => 1,
            'poids' => 50,
            'nb_repetition' => 7,
        ]);
        DB::table("performance")->insert([
            'workout_id' => 1,
            'exercices_id' => 3,
            'numero_series' => 1,
            'poids' => 50,
            'nb_repetition' => 7,
        ]);
        DB::table("performance")->insert([
            'workout_id' => 1,
            'exercices_id' => 4,
            'numero_series' => 1,
            'poids' => 50,
            'nb_repetition' => 7,
        ]);
        DB::table("performance")->insert([
            'workout_id' => 1,
            'exercices_id' => 4,
            'numero_series' => 1,
            'poids' => 50,
            'nb_repetition' => 7,
        ]);
        DB::table("performance")->insert([
            'workout_id' => 1,
            'exercices_id' => 4,
            'numero_series' => 1,
            'poids' => 50,
            'nb_repetition' => 7,
        ]);
        DB::table("performance")->insert([
            'workout_id' => 1,
            'exercices_id' => 5,
            'numero_series' => 1,
            'poids' => 50,
            'nb_repetition' => 7,
        ]);
        DB::table("performance")->insert([
            'workout_id' => 1,
            'exercices_id' => 5,
            'numero_series' => 1,
            'poids' => 50,
            'nb_repetition' => 7,
        ]);
        DB::table("performance")->insert([
            'workout_id' => 1,
            'exercices_id' => 5,
            'numero_series' => 1,
            'poids' => 50,
            'nb_repetition' => 7,
        ]);
        DB::table("performance")->insert([
            'workout_id' => 1,
            'exercices_id' => 6,
            'numero_series' => 1,
            'poids' => 50,
            'nb_repetition' => 7,
        ]);
        DB::table("performance")->insert([
            'workout_id' => 1,
            'exercices_id' => 6,
            'numero_series' => 1,
            'poids' => 50,
            'nb_repetition' => 7,
        ]);
        DB::table("performance")->insert([
            'workout_id' => 1,
            'exercices_id' => 6,
            'numero_series' => 1,
            'poids' => 50,
            'nb_repetition' => 7,
        ]);
    }
}
