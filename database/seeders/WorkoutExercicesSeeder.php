<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkoutExercicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('exercices_workout_template')->insert([
            ['exercices_id' => 1, 'workout_template_id' => 1,'nb_rep_min' => 5, 'nb_rep_max' => 12, 'nb_series' => 3,],
            ['exercices_id' => 2, 'workout_template_id' => 1,'nb_rep_min' => 5, 'nb_rep_max' => 12, 'nb_series' => 3,],
            ['exercices_id' => 3, 'workout_template_id' => 1,'nb_rep_min' => 5, 'nb_rep_max' => 12, 'nb_series' => 3,],
            ['exercices_id' => 4, 'workout_template_id' => 1,'nb_rep_min' => 5, 'nb_rep_max' => 12, 'nb_series' => 3,],
            ['exercices_id' => 5, 'workout_template_id' => 1,'nb_rep_min' => 5, 'nb_rep_max' => 12, 'nb_series' => 3,],
            ['exercices_id' => 6, 'workout_template_id' => 1,'nb_rep_min' => 5, 'nb_rep_max' => 12, 'nb_series' => 3,],
            ['exercices_id' => 7, 'workout_template_id' => 2,'nb_rep_min' => 5, 'nb_rep_max' => 12, 'nb_series' => 3,],
            ['exercices_id' => 8, 'workout_template_id' => 2,'nb_rep_min' => 5, 'nb_rep_max' => 12, 'nb_series' => 3,],
            ['exercices_id' => 9, 'workout_template_id' => 2,'nb_rep_min' => 5, 'nb_rep_max' => 12, 'nb_series' => 3,],
            ['exercices_id' => 10, 'workout_template_id' => 2,'nb_rep_min' => 5, 'nb_rep_max' => 12, 'nb_series' => 3,],
            ['exercices_id' => 11, 'workout_template_id' => 2,'nb_rep_min' => 5, 'nb_rep_max' => 12, 'nb_series' => 3,],
            ['exercices_id' => 12, 'workout_template_id' => 2,'nb_rep_min' => 5, 'nb_rep_max' => 12, 'nb_series' => 3,],
        ]);
    }
}
