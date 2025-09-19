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
            ///push max
            ///
            /// premier id = 1
            [
                'name' => 'Développé incliné à la machine',
                'nb_rep_min' => 5,
                'nb_rep_max' => 12,
                'nb_series' => 3,
                'muscle_id' => 2,
                'user_id' => 1,
                'public' => false,
            ],
            [
                'name' => 'Écarté à la poulie basse',
                'nb_rep_min' => 5,
                'nb_rep_max' => 12,
                'nb_series' => 3,
                'muscle_id' => 2,
                'user_id' => 1,
                'public' => false,
            ],
            [
                'name' => 'Développé militaire à la machine',
                'nb_rep_min' => 5,
                'nb_rep_max' => 12,
                'nb_series' => 3,
                'muscle_id' => 3,
                'user_id' => 1,
                'public' => false,
            ],
            [
                'name' => 'Élévation latéral aux haltères',
                'nb_rep_min' => 5,
                'nb_rep_max' => 12,
                'nb_series' => 3,
                'muscle_id' => 3,
                'user_id' => 1,
                'public' => false,
            ],
            [
                'name' => 'Barre au front aux haltères',
                'nb_rep_min' => 5,
                'nb_rep_max' => 12,
                'nb_series' => 3,
                'muscle_id' => 5,
                'user_id' => 1,
                'public' => false,
            ],
            [
                'name' => 'Tirage à la poulie haute',
                'nb_rep_min' => 5,
                'nb_rep_max' => 12,
                'nb_series' => 3,
                'muscle_id' => 5,
                'user_id' => 1,
                'public' => false,
            ],
            /////
            /////pull max
            [
                'name' => 'Tirage verticale à la poulie haute',
                'nb_rep_min' => 5,
                'nb_rep_max' => 12,
                'nb_series' => 3,
                'muscle_id' => 1,
                'user_id' => 1,
                'public' => false,
            ],
            [
                'name' => 'Tirage Horizontale à la poulie',
                'nb_rep_min' => 5,
                'nb_rep_max' => 12,
                'nb_series' => 3,
                'muscle_id' => 1,
                'user_id' => 1,
                'public' => false,
            ],
            [
                'name' => 'Curl marteau aux haltères',
                'nb_rep_min' => 5,
                'nb_rep_max' => 12,
                'nb_series' => 3,
                'muscle_id' => 4,
                'user_id' => 1,
                'public' => false,
            ],
            [
                'name' => 'Tiage biceps à la poulie haute',
                'nb_rep_min' => 5,
                'nb_rep_max' => 12,
                'nb_series' => 3,
                'muscle_id' => 4,
                'user_id' => 1,
                'public' => false,
            ],
            [
                'name' => "Arrière d'épaule à la poulie",
                'nb_rep_min' => 5,
                'nb_rep_max' => 12,
                'nb_series' => 3,
                'muscle_id' => 3,
                'user_id' => 1,
                'public' => false,
            ],
            [
                'name' => 'Avant bras à la poulie haute',
                'nb_rep_min' => 5,
                'nb_rep_max' => 12,
                'nb_series' => 3,
                'muscle_id' => 6,
                'user_id' => 1,
                'public' => false,
            ],
            /////
            /////jambes max

            /////
            [
                'name' => 'Développé couché',
                'nb_rep_min' => 8,
                'nb_rep_max' => 12,
                'nb_series' => 3,
                'muscle_id' => 2,
                'user_id' => 2,
                'public' => false,
            ],

            [
                'name' => 'Développé couché',
                'nb_rep_min' => 8,
                'nb_rep_max' => 12,
                'nb_series' => 3,
                'muscle_id' => 2,
                'user_id' => 2,
                'public' => false,
            ],
            [
                'name' => 'Tractions pronation',
                'nb_rep_min' => 5,
                'nb_rep_max' => 12,
                'nb_series' => 3,
                'muscle_id' => 1,
                'user_id' => 2,
                'public' => false,
            ],
            [
                'name' => 'Développé militaire',
                'nb_rep_min' => 8,
                'nb_rep_max' => 12,
                'nb_series' => 3,
                'muscle_id' => 3,
                'user_id' => 2,
                'public' => false,
            ],
            [
                'name' => 'Curl biceps',
                'nb_rep_min' => 8,
                'nb_rep_max' => 12,
                'nb_series' => 3,
                'muscle_id' => 4,
                'user_id' => 2,
                'public' => false,
            ],
            [
                'name' => 'Extensions triceps poulie',
                'nb_rep_min' => 8,
                'nb_rep_max' => 12,
                'nb_series' => 3,
                'muscle_id' => 5,
                'user_id' => 2,
                'public' => false,
            ],
            [
                'name' => 'Squat',
                'nb_rep_min' => 5,
                'nb_rep_max' => 12,
                'nb_series' => 3,
                'muscle_id' => 6,
                'user_id' => 2,
                'public' => false,
            ],
            [
                'name' => 'Fentes avant',
                'nb_rep_min' => 8,
                'nb_rep_max' => 12,
                'nb_series' => 3,
                'muscle_id' => 6,
                'user_id' => 2,
                'public' => false,
            ],
            [
                'name' => 'Crunch au sol',
                'nb_rep_min' => 12,
                'nb_rep_max' => 20,
                'nb_series' => 3,
                'muscle_id' => 7,
                'user_id' => 2,
                'public' => false,
            ],
        ]);
    }
}
