<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\table;

class ExercicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('exercices')->insert([
            [
                'name' => 'Développé couché',
                'nb_rep_min' => 8,
                'nb_rep_max' => 12,
                'nb_series' => 3,
                'muscle_id' => 2,
            ],
            [
                'name' => 'Tractions pronation',
                'nb_rep_min' => 5,
                'nb_rep_max' => 12,
                'nb_series' => 3,
                'muscle_id' => 1,
            ],
            [
                'name' => 'Développé militaire',
                'nb_rep_min' => 8,
                'nb_rep_max' => 12,
                'nb_series' => 3,
                'muscle_id' => 3,
            ],
            [
                'name' => 'Curl biceps',
                'nb_rep_min' => 8,
                'nb_rep_max' => 12,
                'nb_series' => 3,
                'muscle_id' => 4,
            ],
            [
                'name' => 'Extensions triceps poulie',
                'nb_rep_min' => 8,
                'nb_rep_max' => 12,
                'nb_series' => 3,
                'muscle_id' => 5,
            ],
            [
                'name' => 'Squat',
                'nb_rep_min' => 5,
                'nb_rep_max' => 12,
                'nb_series' => 3,
                'muscle_id' => 6,
            ],
            [
                'name' => 'Fentes avant',
                'nb_rep_min' => 8,
                'nb_rep_max' => 12,
                'nb_series' => 3,
                'muscle_id' => 6,
            ],
            [
                'name' => 'Crunch au sol',
                'nb_rep_min' => 12,
                'nb_rep_max' => 20,
                'nb_series' => 3,
                'muscle_id' => 7,
            ],
        ]);
    }
}
