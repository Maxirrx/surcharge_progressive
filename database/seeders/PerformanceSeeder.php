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
        DB::table('performance')->insert([
            // Machine incliné pec (exo_id = 1)
            ['workout_id' => 1, 'exercices_id' => 1, 'numero_series' => 1, 'poids' => 40, 'nb_repetition' => 12],
            ['workout_id' => 1, 'exercices_id' => 1, 'numero_series' => 2, 'poids' => 40, 'nb_repetition' => 12],
            ['workout_id' => 1, 'exercices_id' => 1, 'numero_series' => 3, 'poids' => 40, 'nb_repetition' => 12],

            // Écarté poulie basse (exo_id = 2)
            ['workout_id' => 1, 'exercices_id' => 2, 'numero_series' => 1, 'poids' => 23, 'nb_repetition' => 10],
            ['workout_id' => 1, 'exercices_id' => 2, 'numero_series' => 2, 'poids' => 23, 'nb_repetition' => 10],
            ['workout_id' => 1, 'exercices_id' => 2, 'numero_series' => 3, 'poids' => 23, 'nb_repetition' => 9],

            // Dev militaire machine (exo_id = 3)
            ['workout_id' => 1, 'exercices_id' => 3, 'numero_series' => 1, 'poids' => 25, 'nb_repetition' => 11],
            ['workout_id' => 1, 'exercices_id' => 3, 'numero_series' => 2, 'poids' => 25, 'nb_repetition' => 9],
            ['workout_id' => 1, 'exercices_id' => 3, 'numero_series' => 3, 'poids' => 25, 'nb_repetition' => 7],

            // Élévation latéral haltères (exo_id = 4)
            ['workout_id' => 1, 'exercices_id' => 4, 'numero_series' => 1, 'poids' => 10, 'nb_repetition' => 15],
            ['workout_id' => 1, 'exercices_id' => 4, 'numero_series' => 2, 'poids' => 10, 'nb_repetition' => 25],
            ['workout_id' => 1, 'exercices_id' => 4, 'numero_series' => 3, 'poids' => 10, 'nb_repetition' => 20],

            // Barre au front haltère (exo_id = 5)
            ['workout_id' => 1, 'exercices_id' => 5, 'numero_series' => 1, 'poids' => 10, 'nb_repetition' => 12],
            ['workout_id' => 1, 'exercices_id' => 5, 'numero_series' => 2, 'poids' => 10, 'nb_repetition' => 12],
            ['workout_id' => 1, 'exercices_id' => 5, 'numero_series' => 3, 'poids' => 10, 'nb_repetition' => 12],

            // Triceps poulie mise haute (inconnu dans ta liste → id = 6 par défaut)
            ['workout_id' => 1, 'exercices_id' => 6, 'numero_series' => 1, 'poids' => 15, 'nb_repetition' => 12],
            ['workout_id' => 1, 'exercices_id' => 6, 'numero_series' => 2, 'poids' => 15, 'nb_repetition' => 12],
            ['workout_id' => 1, 'exercices_id' => 6, 'numero_series' => 3, 'poids' => 15, 'nb_repetition' => 12],
        ]);

        DB::table('performance')->insert([
            // Tirage vertical ATX (exo_id = 7)
            ['workout_id' => 2, 'exercices_id' => 7, 'numero_series' => 1, 'poids' => 68, 'nb_repetition' => 11],
            ['workout_id' => 2, 'exercices_id' => 7, 'numero_series' => 2, 'poids' => 68, 'nb_repetition' => 9],
            ['workout_id' => 2, 'exercices_id' => 7, 'numero_series' => 3, 'poids' => 59, 'nb_repetition' => 10],

            // Rowing poulie (exo_id = 8)
            ['workout_id' => 2, 'exercices_id' => 8, 'numero_series' => 1, 'poids' => 45, 'nb_repetition' => 12],
            ['workout_id' => 2, 'exercices_id' => 8, 'numero_series' => 2, 'poids' => 45, 'nb_repetition' => 12],
            ['workout_id' => 2, 'exercices_id' => 8, 'numero_series' => 3, 'poids' => 45, 'nb_repetition' => 12],

            // Curl marteau haltère (exo_id = 9)
            ['workout_id' => 2, 'exercices_id' => 9, 'numero_series' => 1, 'poids' => 15, 'nb_repetition' => 10],
            ['workout_id' => 2, 'exercices_id' => 9, 'numero_series' => 2, 'poids' => 15, 'nb_repetition' => 12],
            ['workout_id' => 2, 'exercices_id' => 9, 'numero_series' => 3, 'poids' => 15, 'nb_repetition' => 10],

            // Biceps poulie haute à genoux (exo_id = 10)
            ['workout_id' => 2, 'exercices_id' => 10, 'numero_series' => 1, 'poids' => 18, 'nb_repetition' => 12],
            ['workout_id' => 2, 'exercices_id' => 10, 'numero_series' => 2, 'poids' => 23, 'nb_repetition' => 12],
            ['workout_id' => 2, 'exercices_id' => 10, 'numero_series' => 3, 'poids' => 27, 'nb_repetition' => 12],

            // Arrière épaule poulie (exo_id = 11)
            ['workout_id' => 2, 'exercices_id' => 11, 'numero_series' => 1, 'poids' => 14, 'nb_repetition' => 12],
            ['workout_id' => 2, 'exercices_id' => 11, 'numero_series' => 2, 'poids' => 18, 'nb_repetition' => 12],
            ['workout_id' => 2, 'exercices_id' => 11, 'numero_series' => 3, 'poids' => 18, 'nb_repetition' => 9],

            // Avant bras poulie (exo_id = 12)
            ['workout_id' => 2, 'exercices_id' => 12, 'numero_series' => 1, 'poids' => 36, 'nb_repetition' => 12],
            ['workout_id' => 2, 'exercices_id' => 12, 'numero_series' => 2, 'poids' => 45, 'nb_repetition' => 11],
            ['workout_id' => 2, 'exercices_id' => 12, 'numero_series' => 3, 'poids' => 45, 'nb_repetition' => 9],
        ]);


        DB::table("performance")->insert([
            ['workout_id' => 100, 'exercices_id' => 1, 'numero_series' => 1, 'poids' => 50, 'nb_repetition' => 7],
            ['workout_id' => 100, 'exercices_id' => 1, 'numero_series' => 2, 'poids' => 50, 'nb_repetition' => 7],
            ['workout_id' => 100, 'exercices_id' => 1, 'numero_series' => 3, 'poids' => 50, 'nb_repetition' => 7],

            ['workout_id' => 101, 'exercices_id' => 1, 'numero_series' => 1, 'poids' => 50, 'nb_repetition' => 7],
            ['workout_id' => 101, 'exercices_id' => 1, 'numero_series' => 2, 'poids' => 50, 'nb_repetition' => 7],
            ['workout_id' => 101, 'exercices_id' => 1, 'numero_series' => 3, 'poids' => 50, 'nb_repetition' => 7],

            ['workout_id' => 102, 'exercices_id' => 1, 'numero_series' => 1, 'poids' => 50, 'nb_repetition' => 7],
            ['workout_id' => 102, 'exercices_id' => 1, 'numero_series' => 2, 'poids' => 50, 'nb_repetition' => 7],
            ['workout_id' => 102, 'exercices_id' => 1, 'numero_series' => 3, 'poids' => 50, 'nb_repetition' => 7],

            ['workout_id' => 103, 'exercices_id' => 1, 'numero_series' => 1, 'poids' => 50, 'nb_repetition' => 7],
            ['workout_id' => 103, 'exercices_id' => 1, 'numero_series' => 2, 'poids' => 50, 'nb_repetition' => 7],
            ['workout_id' => 103, 'exercices_id' => 1, 'numero_series' => 3, 'poids' => 50, 'nb_repetition' => 7],

            ['workout_id' => 104, 'exercices_id' => 1, 'numero_series' => 1, 'poids' => 100, 'nb_repetition' => 7],
            ['workout_id' => 104, 'exercices_id' => 1, 'numero_series' => 2, 'poids' => 100, 'nb_repetition' => 7],
            ['workout_id' => 104, 'exercices_id' => 1, 'numero_series' => 3, 'poids' => 100, 'nb_repetition' => 7],

            ['workout_id' => 105, 'exercices_id' => 4, 'numero_series' => 1, 'poids' => 50, 'nb_repetition' => 7],
            ['workout_id' => 105, 'exercices_id' => 4, 'numero_series' => 2, 'poids' => 50, 'nb_repetition' => 7],
            ['workout_id' => 105, 'exercices_id' => 4, 'numero_series' => 3, 'poids' => 50, 'nb_repetition' => 7],

            ['workout_id' => 106, 'exercices_id' => 4, 'numero_series' => 1, 'poids' => 50, 'nb_repetition' => 7],
            ['workout_id' => 106, 'exercices_id' => 4, 'numero_series' => 2, 'poids' => 50, 'nb_repetition' => 7],
            ['workout_id' => 106, 'exercices_id' => 4, 'numero_series' => 3, 'poids' => 50, 'nb_repetition' => 7],

            ['workout_id' => 107, 'exercices_id' => 4, 'numero_series' => 1, 'poids' => 50, 'nb_repetition' => 7],
            ['workout_id' => 107, 'exercices_id' => 4, 'numero_series' => 2, 'poids' => 50, 'nb_repetition' => 7],
            ['workout_id' => 107, 'exercices_id' => 4, 'numero_series' => 3, 'poids' => 50, 'nb_repetition' => 7],

            ['workout_id' => 108, 'exercices_id' => 4, 'numero_series' => 1, 'poids' => 50, 'nb_repetition' => 7],
            ['workout_id' => 108, 'exercices_id' => 4, 'numero_series' => 2, 'poids' => 50, 'nb_repetition' => 7],
            ['workout_id' => 108, 'exercices_id' => 4, 'numero_series' => 3, 'poids' => 50, 'nb_repetition' => 7],

            ['workout_id' => 109, 'exercices_id' => 4, 'numero_series' => 1, 'poids' => 50, 'nb_repetition' => 7],
            ['workout_id' => 109, 'exercices_id' => 4, 'numero_series' => 2, 'poids' => 50, 'nb_repetition' => 7],
            ['workout_id' => 109, 'exercices_id' => 4, 'numero_series' => 3, 'poids' => 50, 'nb_repetition' => 7],

            ['workout_id' => 110, 'exercices_id' => 4, 'numero_series' => 1, 'poids' => 100, 'nb_repetition' => 7],
            ['workout_id' => 110, 'exercices_id' => 4, 'numero_series' => 2, 'poids' => 100, 'nb_repetition' => 7],
            ['workout_id' => 110, 'exercices_id' => 4, 'numero_series' => 3, 'poids' => 100, 'nb_repetition' => 7],

            ['workout_id' => 111, 'exercices_id' => 6, 'numero_series' => 1, 'poids' => 50, 'nb_repetition' => 7],
            ['workout_id' => 111, 'exercices_id' => 6, 'numero_series' => 2, 'poids' => 50, 'nb_repetition' => 7],
            ['workout_id' => 111, 'exercices_id' => 6, 'numero_series' => 3, 'poids' => 50, 'nb_repetition' => 7],

            ['workout_id' => 112, 'exercices_id' => 6, 'numero_series' => 1, 'poids' => 50, 'nb_repetition' => 7],
            ['workout_id' => 112, 'exercices_id' => 6, 'numero_series' => 2, 'poids' => 50, 'nb_repetition' => 7],
            ['workout_id' => 112, 'exercices_id' => 6, 'numero_series' => 3, 'poids' => 50, 'nb_repetition' => 7],

            ['workout_id' => 113, 'exercices_id' => 6, 'numero_series' => 1, 'poids' => 50, 'nb_repetition' => 7],
            ['workout_id' => 113, 'exercices_id' => 6, 'numero_series' => 2, 'poids' => 50, 'nb_repetition' => 7],
            ['workout_id' => 113, 'exercices_id' => 6, 'numero_series' => 3, 'poids' => 50, 'nb_repetition' => 7],

            ['workout_id' => 114, 'exercices_id' => 6, 'numero_series' => 1, 'poids' => 50, 'nb_repetition' => 7],
            ['workout_id' => 114, 'exercices_id' => 6, 'numero_series' => 2, 'poids' => 50, 'nb_repetition' => 7],
            ['workout_id' => 114, 'exercices_id' => 6, 'numero_series' => 3, 'poids' => 50, 'nb_repetition' => 7],

            ['workout_id' => 114, 'exercices_id' => 6, 'numero_series' => 1, 'poids' => 50, 'nb_repetition' => 7],
            ['workout_id' => 114, 'exercices_id' => 6, 'numero_series' => 2, 'poids' => 50, 'nb_repetition' => 7],
            ['workout_id' => 114, 'exercices_id' => 6, 'numero_series' => 3, 'poids' => 50, 'nb_repetition' => 7],
        ]);
    }
}
