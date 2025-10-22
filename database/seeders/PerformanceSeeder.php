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
            // 🏋️ PEC 15/09
            // Machine incliné pec
            ['workout_id' => 1, 'exercices_id' => 1, 'numero_series' => 1, 'poids' => 40, 'nb_repetition' => 12],
            ['workout_id' => 1, 'exercices_id' => 1, 'numero_series' => 2, 'poids' => 40, 'nb_repetition' => 12],
            ['workout_id' => 1, 'exercices_id' => 1, 'numero_series' => 3, 'poids' => 40, 'nb_repetition' => 12],

            // Écarté poulie basse
            ['workout_id' => 1, 'exercices_id' => 2, 'numero_series' => 1, 'poids' => 23, 'nb_repetition' => 10],
            ['workout_id' => 1, 'exercices_id' => 2, 'numero_series' => 2, 'poids' => 23, 'nb_repetition' => 10],
            ['workout_id' => 1, 'exercices_id' => 2, 'numero_series' => 3, 'poids' => 23, 'nb_repetition' => 9],

            // Dev militaire machine
            ['workout_id' => 1, 'exercices_id' => 3, 'numero_series' => 1, 'poids' => 25, 'nb_repetition' => 11],
            ['workout_id' => 1, 'exercices_id' => 3, 'numero_series' => 2, 'poids' => 25, 'nb_repetition' => 9],
            ['workout_id' => 1, 'exercices_id' => 3, 'numero_series' => 3, 'poids' => 25, 'nb_repetition' => 7],

            // Élévation latérale haltères
            ['workout_id' => 1, 'exercices_id' => 4, 'numero_series' => 1, 'poids' => 10, 'nb_repetition' => 15],
            ['workout_id' => 1, 'exercices_id' => 4, 'numero_series' => 2, 'poids' => 10, 'nb_repetition' => 25],
            ['workout_id' => 1, 'exercices_id' => 4, 'numero_series' => 3, 'poids' => 10, 'nb_repetition' => 20],

            // Barre au front haltères
            ['workout_id' => 1, 'exercices_id' => 5, 'numero_series' => 1, 'poids' => 10, 'nb_repetition' => 12],
            ['workout_id' => 1, 'exercices_id' => 5, 'numero_series' => 2, 'poids' => 10, 'nb_repetition' => 12],
            ['workout_id' => 1, 'exercices_id' => 5, 'numero_series' => 3, 'poids' => 10, 'nb_repetition' => 12],

            // Triceps poulie mise haute
            ['workout_id' => 1, 'exercices_id' => 6, 'numero_series' => 1, 'poids' => 15, 'nb_repetition' => 12],
            ['workout_id' => 1, 'exercices_id' => 6, 'numero_series' => 2, 'poids' => 15, 'nb_repetition' => 12],
            ['workout_id' => 1, 'exercices_id' => 6, 'numero_series' => 3, 'poids' => 15, 'nb_repetition' => 12],


            // 🔹 PULL 16/09
            // Tirage verticale ATX moyenne
            ['workout_id' => 2, 'exercices_id' => 7, 'numero_series' => 1, 'poids' => 68, 'nb_repetition' => 11],
            ['workout_id' => 2, 'exercices_id' => 7, 'numero_series' => 2, 'poids' => 68, 'nb_repetition' => 9],
            ['workout_id' => 2, 'exercices_id' => 7, 'numero_series' => 3, 'poids' => 59, 'nb_repetition' => 10],

            // Rowing poulie deux poignées
            ['workout_id' => 2, 'exercices_id' => 8, 'numero_series' => 1, 'poids' => 45, 'nb_repetition' => 12],
            ['workout_id' => 2, 'exercices_id' => 8, 'numero_series' => 2, 'poids' => 45, 'nb_repetition' => 12],
            ['workout_id' => 2, 'exercices_id' => 8, 'numero_series' => 3, 'poids' => 45, 'nb_repetition' => 12],

            // Curl marteau haltère
            ['workout_id' => 2, 'exercices_id' => 9, 'numero_series' => 1, 'poids' => 15, 'nb_repetition' => 10],
            ['workout_id' => 2, 'exercices_id' => 9, 'numero_series' => 2, 'poids' => 15, 'nb_repetition' => 12],
            ['workout_id' => 2, 'exercices_id' => 9, 'numero_series' => 3, 'poids' => 15, 'nb_repetition' => 10],

            // Biceps poulie haute à genoux
            ['workout_id' => 2, 'exercices_id' => 10, 'numero_series' => 1, 'poids' => 18, 'nb_repetition' => 12],
            ['workout_id' => 2, 'exercices_id' => 10, 'numero_series' => 2, 'poids' => 23, 'nb_repetition' => 12],
            ['workout_id' => 2, 'exercices_id' => 10, 'numero_series' => 3, 'poids' => 27, 'nb_repetition' => 12],

            // Arrière épaule poulie
            ['workout_id' => 2, 'exercices_id' => 11, 'numero_series' => 1, 'poids' => 14, 'nb_repetition' => 12],
            ['workout_id' => 2, 'exercices_id' => 11, 'numero_series' => 2, 'poids' => 18, 'nb_repetition' => 12],
            ['workout_id' => 2, 'exercices_id' => 11, 'numero_series' => 3, 'poids' => 18, 'nb_repetition' => 9],

            // Avant-bras poulie
            ['workout_id' => 2, 'exercices_id' => 12, 'numero_series' => 1, 'poids' => 36, 'nb_repetition' => 12],
            ['workout_id' => 2, 'exercices_id' => 12, 'numero_series' => 2, 'poids' => 45, 'nb_repetition' => 11],
            ['workout_id' => 2, 'exercices_id' => 12, 'numero_series' => 3, 'poids' => 45, 'nb_repetition' => 9],


            // 🦵 LEGS 17/09
            // Leg extension
            ['workout_id' => 3, 'exercices_id' => 13, 'numero_series' => 1, 'poids' => 35, 'nb_repetition' => 12],
            ['workout_id' => 3, 'exercices_id' => 13, 'numero_series' => 2, 'poids' => 40, 'nb_repetition' => 12],
            ['workout_id' => 3, 'exercices_id' => 13, 'numero_series' => 3, 'poids' => 45, 'nb_repetition' => 12],

            // Squat belt
            ['workout_id' => 3, 'exercices_id' => 14, 'numero_series' => 1, 'poids' => 100, 'nb_repetition' => 12],
            ['workout_id' => 3, 'exercices_id' => 14, 'numero_series' => 2, 'poids' => 120, 'nb_repetition' => 12],
            ['workout_id' => 3, 'exercices_id' => 14, 'numero_series' => 3, 'poids' => 120, 'nb_repetition' => 12],

            // Kick back ischio
            ['workout_id' => 3, 'exercices_id' => 15, 'numero_series' => 1, 'poids' => 20, 'nb_repetition' => 12],
            ['workout_id' => 3, 'exercices_id' => 15, 'numero_series' => 2, 'poids' => 20, 'nb_repetition' => 11],
            ['workout_id' => 3, 'exercices_id' => 15, 'numero_series' => 3, 'poids' => 20, 'nb_repetition' => 9],

            // Hip thrust
            ['workout_id' => 3, 'exercices_id' => 16, 'numero_series' => 1, 'poids' => 70, 'nb_repetition' => 12],
            ['workout_id' => 3, 'exercices_id' => 16, 'numero_series' => 2, 'poids' => 70, 'nb_repetition' => 10],
            ['workout_id' => 3, 'exercices_id' => 16, 'numero_series' => 3, 'poids' => 60, 'nb_repetition' => 12],

                ['workout_id' => 4, 'exercices_id' => 1, 'numero_series' => 1, 'poids' => 45, 'nb_repetition' => 12],
                ['workout_id' => 4, 'exercices_id' => 1, 'numero_series' => 2, 'poids' => 45, 'nb_repetition' => 10],
                ['workout_id' => 4, 'exercices_id' => 1, 'numero_series' => 3, 'poids' => 40, 'nb_repetition' => 8],

                ['workout_id' => 4, 'exercices_id' => 2, 'numero_series' => 1, 'poids' => 23, 'nb_repetition' => 12],
                ['workout_id' => 4, 'exercices_id' => 2, 'numero_series' => 2, 'poids' => 23, 'nb_repetition' => 12],
                ['workout_id' => 4, 'exercices_id' => 2, 'numero_series' => 3, 'poids' => 23, 'nb_repetition' => 12],

                ['workout_id' => 4, 'exercices_id' => 3, 'numero_series' => 1, 'poids' => 25, 'nb_repetition' => 12],
                ['workout_id' => 4, 'exercices_id' => 3, 'numero_series' => 2, 'poids' => 25, 'nb_repetition' => 7],
                ['workout_id' => 4, 'exercices_id' => 3, 'numero_series' => 3, 'poids' => 25, 'nb_repetition' => 4],

                ['workout_id' => 4, 'exercices_id' => 4, 'numero_series' => 1, 'poids' => 12.5, 'nb_repetition' => 15],
                ['workout_id' => 4, 'exercices_id' => 4, 'numero_series' => 2, 'poids' => 12.5, 'nb_repetition' => 15],
                ['workout_id' => 4, 'exercices_id' => 4, 'numero_series' => 3, 'poids' => 12.5, 'nb_repetition' => 15],

                ['workout_id' => 4, 'exercices_id' => 5, 'numero_series' => 1, 'poids' => 12.5, 'nb_repetition' => 12],
                ['workout_id' => 4, 'exercices_id' => 5, 'numero_series' => 2, 'poids' => 12.5, 'nb_repetition' => 12],
                ['workout_id' => 4, 'exercices_id' => 5, 'numero_series' => 3, 'poids' => 12.5, 'nb_repetition' => 10],

                ['workout_id' => 4, 'exercices_id' => 6, 'numero_series' => 1, 'poids' => 17.5, 'nb_repetition' => 12],
                ['workout_id' => 4, 'exercices_id' => 6, 'numero_series' => 2, 'poids' => 17.5, 'nb_repetition' => 12],
                ['workout_id' => 4, 'exercices_id' => 6, 'numero_series' => 3, 'poids' => 17.5, 'nb_repetition' => 12],

            ['workout_id' => 5, 'exercices_id' => 21, 'numero_series' => 1, 'poids' => 59, 'nb_repetition' => 12],
            ['workout_id' => 5, 'exercices_id' => 21, 'numero_series' => 2, 'poids' => 59, 'nb_repetition' => 12],
            ['workout_id' => 5, 'exercices_id' => 21, 'numero_series' => 3, 'poids' => 59, 'nb_repetition' => 12],

            ['workout_id' => 5, 'exercices_id' => 23, 'numero_series' => 1, 'poids' => 52, 'nb_repetition' => 12],
            ['workout_id' => 5, 'exercices_id' => 23, 'numero_series' => 2, 'poids' => 52, 'nb_repetition' => 12],
            ['workout_id' => 5, 'exercices_id' => 23, 'numero_series' => 3, 'poids' => 52, 'nb_repetition' => 7],

            ['workout_id' => 5, 'exercices_id' => 30, 'numero_series' => 1, 'poids' => 15, 'nb_repetition' => 12],
            ['workout_id' => 5, 'exercices_id' => 30, 'numero_series' => 2, 'poids' => 15, 'nb_repetition' => 12],
            ['workout_id' => 5, 'exercices_id' => 30, 'numero_series' => 3, 'poids' => 15, 'nb_repetition' => 12],

            ['workout_id' => 5, 'exercices_id' => 33, 'numero_series' => 1, 'poids' => 32, 'nb_repetition' => 12],
            ['workout_id' => 5, 'exercices_id' => 33, 'numero_series' => 2, 'poids' => 32, 'nb_repetition' => 12],
            ['workout_id' => 5, 'exercices_id' => 33, 'numero_series' => 3, 'poids' => 32, 'nb_repetition' => 8],

            ['workout_id' => 5, 'exercices_id' => 38, 'numero_series' => 1, 'poids' => 18, 'nb_repetition' => 12],
            ['workout_id' => 5, 'exercices_id' => 38, 'numero_series' => 2, 'poids' => 18, 'nb_repetition' => 12],
            ['workout_id' => 5, 'exercices_id' => 38, 'numero_series' => 3, 'poids' => 18, 'nb_repetition' => 10],

            ['workout_id' => 6, 'exercices_id' => 39, 'numero_series' => 1, 'poids' => 45, 'nb_repetition' => 12],
            ['workout_id' => 6, 'exercices_id' => 39, 'numero_series' => 2, 'poids' => 45, 'nb_repetition' => 12],
            ['workout_id' => 6, 'exercices_id' => 39, 'numero_series' => 3, 'poids' => 45, 'nb_repetition' => 7],

            ['workout_id' => 6, 'exercices_id' => 40, 'numero_series' => 1, 'poids' => 45, 'nb_repetition' => 12],
            ['workout_id' => 6, 'exercices_id' => 40, 'numero_series' => 2, 'poids' => 45, 'nb_repetition' => 12],
            ['workout_id' => 6, 'exercices_id' => 40, 'numero_series' => 3, 'poids' => 45, 'nb_repetition' => 12],

            ['workout_id' => 6, 'exercices_id' => 41, 'numero_series' => 1, 'poids' => 120, 'nb_repetition' => 12],
            ['workout_id' => 6, 'exercices_id' => 41, 'numero_series' => 2, 'poids' => 140, 'nb_repetition' => 12],
            ['workout_id' => 6, 'exercices_id' => 41, 'numero_series' => 3, 'poids' => 140, 'nb_repetition' => 12],

            ['workout_id' => 6, 'exercices_id' => 43, 'numero_series' => 1, 'poids' => 20, 'nb_repetition' => 12],
            ['workout_id' => 6, 'exercices_id' => 43, 'numero_series' => 2, 'poids' => 20, 'nb_repetition' => 12],
            ['workout_id' => 6, 'exercices_id' => 43, 'numero_series' => 3, 'poids' => 20, 'nb_repetition' => 12],

            ['workout_id' => 6, 'exercices_id' => 44, 'numero_series' => 1, 'poids' => 60, 'nb_repetition' => 12],
            ['workout_id' => 6, 'exercices_id' => 44, 'numero_series' => 2, 'poids' => 60, 'nb_repetition' => 12],
            ['workout_id' => 6, 'exercices_id' => 44, 'numero_series' => 3, 'poids' => 60, 'nb_repetition' => 12],

            ['workout_id' => 7, 'exercices_id' => 9, 'numero_series' => 1, 'poids' => 60, 'nb_repetition' => 12],
            ['workout_id' => 7, 'exercices_id' => 9, 'numero_series' => 2, 'poids' => 75, 'nb_repetition' => 12],
            ['workout_id' => 7, 'exercices_id' => 9, 'numero_series' => 3, 'poids' => 60, 'nb_repetition' => 15],

            ['workout_id' => 7, 'exercices_id' => 4, 'numero_series' => 1, 'poids' => 15, 'nb_repetition' => 12],
            ['workout_id' => 7, 'exercices_id' => 4, 'numero_series' => 2, 'poids' => 15, 'nb_repetition' => 12],
            ['workout_id' => 7, 'exercices_id' => 4, 'numero_series' => 3, 'poids' => 7.5, 'nb_repetition' => 12],

            ['workout_id' => 7, 'exercices_id' => 5, 'numero_series' => 1, 'poids' => 12.5, 'nb_repetition' => 12],
            ['workout_id' => 7, 'exercices_id' => 5, 'numero_series' => 2, 'poids' => 12.5, 'nb_repetition' => 12],
            ['workout_id' => 7, 'exercices_id' => 5, 'numero_series' => 3, 'poids' => 12.6, 'nb_repetition' => 12],

            ['workout_id' => 7, 'exercices_id' => 6, 'numero_series' => 1, 'poids' => 20, 'nb_repetition' => 12],
            ['workout_id' => 7, 'exercices_id' => 6, 'numero_series' => 2, 'poids' => 15, 'nb_repetition' => 12],
            ['workout_id' => 7, 'exercices_id' => 6, 'numero_series' => 3, 'poids' => 15, 'nb_repetition' => 9],
        ]);

        // --- 23/09 | PULL ---
        DB::table('performance')->insert([
            ['workout_id' => 8, 'exercices_id' => 27, 'numero_series' => 1, 'poids' => 0, 'nb_repetition' => 7],
            ['workout_id' => 8, 'exercices_id' => 27, 'numero_series' => 2, 'poids' => 0, 'nb_repetition' => 8],
            ['workout_id' => 8, 'exercices_id' => 27, 'numero_series' => 3, 'poids' => 0, 'nb_repetition' => 6],

            ['workout_id' => 8, 'exercices_id' => 22, 'numero_series' => 1, 'poids' => 68, 'nb_repetition' => 9],
            ['workout_id' => 8, 'exercices_id' => 22, 'numero_series' => 2, 'poids' => 59, 'nb_repetition' => 10],
            ['workout_id' => 8, 'exercices_id' => 22, 'numero_series' => 3, 'poids' => 52, 'nb_repetition' => 6],

            ['workout_id' => 8, 'exercices_id' => 23, 'numero_series' => 1, 'poids' => 45, 'nb_repetition' => 12],
            ['workout_id' => 8, 'exercices_id' => 23, 'numero_series' => 2, 'poids' => 45, 'nb_repetition' => 12],
            ['workout_id' => 8, 'exercices_id' => 23, 'numero_series' => 3, 'poids' => 39, 'nb_repetition' => 12],

            ['workout_id' => 8, 'exercices_id' => 30, 'numero_series' => 1, 'poids' => 15, 'nb_repetition' => 12],
            ['workout_id' => 8, 'exercices_id' => 30, 'numero_series' => 2, 'poids' => 15, 'nb_repetition' => 12],
            ['workout_id' => 8, 'exercices_id' => 30, 'numero_series' => 3, 'poids' => 15, 'nb_repetition' => 12],

            ['workout_id' => 8, 'exercices_id' => 34, 'numero_series' => 1, 'poids' => 36, 'nb_repetition' => 8],
            ['workout_id' => 8, 'exercices_id' => 34, 'numero_series' => 2, 'poids' => 32, 'nb_repetition' => 10],
            ['workout_id' => 8, 'exercices_id' => 34, 'numero_series' => 3, 'poids' => 27, 'nb_repetition' => 12],

            ['workout_id' => 8, 'exercices_id' => 38, 'numero_series' => 1, 'poids' => 14, 'nb_repetition' => 12],
            ['workout_id' => 8, 'exercices_id' => 38, 'numero_series' => 2, 'poids' => 18, 'nb_repetition' => 12],
            ['workout_id' => 8, 'exercices_id' => 38, 'numero_series' => 3, 'poids' => 18, 'nb_repetition' => 12],
        ]);

        // --- 24/09 | LEGS ---
        DB::table('performance')->insert([
            ['workout_id' => 9, 'exercices_id' => 40, 'numero_series' => 1, 'poids' => 50, 'nb_repetition' => 12],
            ['workout_id' => 9, 'exercices_id' => 40, 'numero_series' => 2, 'poids' => 50, 'nb_repetition' => 12],
            ['workout_id' => 9, 'exercices_id' => 40, 'numero_series' => 3, 'poids' => 50, 'nb_repetition' => 12],

            ['workout_id' => 9, 'exercices_id' => 43, 'numero_series' => 1, 'poids' => 25, 'nb_repetition' => 12],
            ['workout_id' => 9, 'exercices_id' => 43, 'numero_series' => 2, 'poids' => 25, 'nb_repetition' => 10],
            ['workout_id' => 9, 'exercices_id' => 43, 'numero_series' => 3, 'poids' => 25, 'nb_repetition' => 8],

            ['workout_id' => 9, 'exercices_id' => 41, 'numero_series' => 1, 'poids' => 145, 'nb_repetition' => 12],
            ['workout_id' => 9, 'exercices_id' => 41, 'numero_series' => 2, 'poids' => 160, 'nb_repetition' => 12],
            ['workout_id' => 9, 'exercices_id' => 41, 'numero_series' => 3, 'poids' => 160, 'nb_repetition' => 12],

            ['workout_id' => 9, 'exercices_id' => 44, 'numero_series' => 1, 'poids' => 70, 'nb_repetition' => 12],
            ['workout_id' => 9, 'exercices_id' => 44, 'numero_series' => 2, 'poids' => 75, 'nb_repetition' => 12],
            ['workout_id' => 9, 'exercices_id' => 44, 'numero_series' => 3, 'poids' => 75, 'nb_repetition' => 12],

            ['workout_id' => 9, 'exercices_id' => 45, 'numero_series' => 1, 'poids' => 60, 'nb_repetition' => 12],
            ['workout_id' => 9, 'exercices_id' => 45, 'numero_series' => 2, 'poids' => 60, 'nb_repetition' => 12],
            ['workout_id' => 9, 'exercices_id' => 45, 'numero_series' => 3, 'poids' => 60, 'nb_repetition' => 12],
        ]);

        DB::table('performance')->insert([
            ['workout_id' => 10, 'exercices_id' => 1, 'numero_series' => 1, 'poids' => 45, 'nb_repetition' => 12],
            ['workout_id' => 10, 'exercices_id' => 1, 'numero_series' => 2, 'poids' => 47.5, 'nb_repetition' => 12],
            ['workout_id' => 10, 'exercices_id' => 1, 'numero_series' => 3, 'poids' => 47.5, 'nb_repetition' => 8],

            ['workout_id' => 10, 'exercices_id' => 9, 'numero_series' => 1, 'poids' => 90, 'nb_repetition' => 12],
            ['workout_id' => 10, 'exercices_id' => 9, 'numero_series' => 2, 'poids' => 90, 'nb_repetition' => 9],
            ['workout_id' => 10, 'exercices_id' => 9, 'numero_series' => 3, 'poids' => 65, 'nb_repetition' => 12],

            ['workout_id' => 10, 'exercices_id' => 4, 'numero_series' => 1, 'poids' => 12, 'nb_repetition' => 12],
            ['workout_id' => 10, 'exercices_id' => 4, 'numero_series' => 2, 'poids' => 12, 'nb_repetition' => 12],
            ['workout_id' => 10, 'exercices_id' => 4, 'numero_series' => 3, 'poids' => 12, 'nb_repetition' => 12],

            ['workout_id' => 10, 'exercices_id' => 5, 'numero_series' => 1, 'poids' => 25, 'nb_repetition' => 12],
            ['workout_id' => 10, 'exercices_id' => 5, 'numero_series' => 2, 'poids' => 25, 'nb_repetition' => 12],
            ['workout_id' => 10, 'exercices_id' => 5, 'numero_series' => 3, 'poids' => 25, 'nb_repetition' => 12],

            ['workout_id' => 10, 'exercices_id' => 6, 'numero_series' => 1, 'poids' => 18, 'nb_repetition' => 20],
            ['workout_id' => 10, 'exercices_id' => 6, 'numero_series' => 2, 'poids' => 18, 'nb_repetition' => 12],
            ['workout_id' => 10, 'exercices_id' => 6, 'numero_series' => 3, 'poids' => 18, 'nb_repetition' => 15],

            ['workout_id' => 10, 'exercices_id' => 7, 'numero_series' => 1, 'poids' => 14, 'nb_repetition' => 12],
            ['workout_id' => 10, 'exercices_id' => 7, 'numero_series' => 2, 'poids' => 14, 'nb_repetition' => 12],
            ['workout_id' => 10, 'exercices_id' => 7, 'numero_series' => 3, 'poids' => 14, 'nb_repetition' => 12],
        ]);

        // --- 27/09 | PULL ---
        DB::table('performance')->insert([
            ['workout_id' => 11, 'exercices_id' => 27, 'numero_series' => 1, 'poids' => 0, 'nb_repetition' => 12],
            ['workout_id' => 11, 'exercices_id' => 27, 'numero_series' => 2, 'poids' => 0, 'nb_repetition' => 10],
            ['workout_id' => 11, 'exercices_id' => 27, 'numero_series' => 3, 'poids' => 0, 'nb_repetition' => 5],

            ['workout_id' => 11, 'exercices_id' => 22, 'numero_series' => 1, 'poids' => 52, 'nb_repetition' => 7],
            ['workout_id' => 11, 'exercices_id' => 22, 'numero_series' => 2, 'poids' => 45, 'nb_repetition' => 10],
            ['workout_id' => 11, 'exercices_id' => 22, 'numero_series' => 3, 'poids' => 45, 'nb_repetition' => 9],

            ['workout_id' => 11, 'exercices_id' => 24, 'numero_series' => 1, 'poids' => 32, 'nb_repetition' => 15],
            ['workout_id' => 11, 'exercices_id' => 24, 'numero_series' => 2, 'poids' => 39, 'nb_repetition' => 12],
            ['workout_id' => 11, 'exercices_id' => 24, 'numero_series' => 3, 'poids' => 39, 'nb_repetition' => 12],

            ['workout_id' => 11, 'exercices_id' => 33, 'numero_series' => 1, 'poids' => 27, 'nb_repetition' => 12],
            ['workout_id' => 11, 'exercices_id' => 33, 'numero_series' => 2, 'poids' => 27, 'nb_repetition' => 10],
            ['workout_id' => 11, 'exercices_id' => 33, 'numero_series' => 3, 'poids' => 27, 'nb_repetition' => 8],
        ]);

        // --- 28/09 | LEGS ---
        DB::table('performance')->insert([
            ['workout_id' => 12, 'exercices_id' => 40, 'numero_series' => 1, 'poids' => 60, 'nb_repetition' => 12],
            ['workout_id' => 12, 'exercices_id' => 40, 'numero_series' => 2, 'poids' => 60, 'nb_repetition' => 12],
            ['workout_id' => 12, 'exercices_id' => 40, 'numero_series' => 3, 'poids' => 60, 'nb_repetition' => 12],

            ['workout_id' => 12, 'exercices_id' => 43, 'numero_series' => 1, 'poids' => 25, 'nb_repetition' => 12],
            ['workout_id' => 12, 'exercices_id' => 43, 'numero_series' => 2, 'poids' => 25, 'nb_repetition' => 12],
            ['workout_id' => 12, 'exercices_id' => 43, 'numero_series' => 3, 'poids' => 25, 'nb_repetition' => 12],

            ['workout_id' => 12, 'exercices_id' => 44, 'numero_series' => 1, 'poids' => 80, 'nb_repetition' => 12],
            ['workout_id' => 12, 'exercices_id' => 44, 'numero_series' => 2, 'poids' => 80, 'nb_repetition' => 12],
            ['workout_id' => 12, 'exercices_id' => 44, 'numero_series' => 3, 'poids' => 80, 'nb_repetition' => 12],
        ]);
        // --- 29/09 | PUSH ---
        DB::table('performance')->insert([
            ['workout_id' => 13, 'exercices_id' => 1, 'numero_series' => 1, 'poids' => 45, 'nb_repetition' => 12],
            ['workout_id' => 13, 'exercices_id' => 1, 'numero_series' => 2, 'poids' => 45, 'nb_repetition' => 12],
            ['workout_id' => 13, 'exercices_id' => 1, 'numero_series' => 3, 'poids' => 45, 'nb_repetition' => 12],

            ['workout_id' => 13, 'exercices_id' => 2, 'numero_series' => 1, 'poids' => 75, 'nb_repetition' => 9],
            ['workout_id' => 13, 'exercices_id' => 2, 'numero_series' => 2, 'poids' => 75, 'nb_repetition' => 10],
            ['workout_id' => 13, 'exercices_id' => 2, 'numero_series' => 3, 'poids' => 75, 'nb_repetition' => 11],

            ['workout_id' => 13, 'exercices_id' => 4, 'numero_series' => 1, 'poids' => 12.5, 'nb_repetition' => 12],
            ['workout_id' => 13, 'exercices_id' => 4, 'numero_series' => 2, 'poids' => 12.5, 'nb_repetition' => 12],
            ['workout_id' => 13, 'exercices_id' => 4, 'numero_series' => 3, 'poids' => 12.5, 'nb_repetition' => 12],

            ['workout_id' => 13, 'exercices_id' => 3, 'numero_series' => 1, 'poids' => 20, 'nb_repetition' => 12],
            ['workout_id' => 13, 'exercices_id' => 3, 'numero_series' => 2, 'poids' => 20, 'nb_repetition' => 12],
            ['workout_id' => 13, 'exercices_id' => 3, 'numero_series' => 3, 'poids' => 20, 'nb_repetition' => 11],

            ['workout_id' => 13, 'exercices_id' => 6, 'numero_series' => 1, 'poids' => 23, 'nb_repetition' => 12],
            ['workout_id' => 13, 'exercices_id' => 6, 'numero_series' => 2, 'poids' => 18, 'nb_repetition' => 16],
            ['workout_id' => 13, 'exercices_id' => 6, 'numero_series' => 3, 'poids' => 18, 'nb_repetition' => 12],

            ['workout_id' => 13, 'exercices_id' => 5, 'numero_series' => 1, 'poids' => 18, 'nb_repetition' => 15],
            ['workout_id' => 13, 'exercices_id' => 5, 'numero_series' => 2, 'poids' => 18, 'nb_repetition' => 15],
        ]);

        // --- 30/09 | PULL ---
        DB::table('performance')->insert([
            ['workout_id' => 14, 'exercices_id' => 27, 'numero_series' => 1, 'poids' => 0, 'nb_repetition' => 100],
        ]);

        // --- 01/10 | LEGS ---
        DB::table('performance')->insert([
            ['workout_id' => 15, 'exercices_id' => 40, 'numero_series' => 1, 'poids' => 65, 'nb_repetition' => 8],
            ['workout_id' => 16, 'exercices_id' => 40, 'numero_series' => 2, 'poids' => 55, 'nb_repetition' => 12],
            ['workout_id' => 16, 'exercices_id' => 40, 'numero_series' => 3, 'poids' => 55, 'nb_repetition' => 12],

            ['workout_id' => 16, 'exercices_id' => 45, 'numero_series' => 1, 'poids' => 75, 'nb_repetition' => 12],
            ['workout_id' => 16, 'exercices_id' => 45, 'numero_series' => 2, 'poids' => 95, 'nb_repetition' => 12],
            ['workout_id' => 16, 'exercices_id' => 45, 'numero_series' => 3, 'poids' => 80, 'nb_repetition' => 12],

            ['workout_id' => 16, 'exercices_id' => 46, 'numero_series' => 1, 'poids' => 65, 'nb_repetition' => 12],
            ['workout_id' => 16, 'exercices_id' => 46, 'numero_series' => 2, 'poids' => 80, 'nb_repetition' => 12],
            ['workout_id' => 16, 'exercices_id' => 46, 'numero_series' => 3, 'poids' => 70, 'nb_repetition' => 12],

            ['workout_id' => 16, 'exercices_id' => 43, 'numero_series' => 1, 'poids' => 25, 'nb_repetition' => 12],
            ['workout_id' => 16, 'exercices_id' => 43, 'numero_series' => 2, 'poids' => 25, 'nb_repetition' => 12],
            ['workout_id' => 16, 'exercices_id' => 43, 'numero_series' => 3, 'poids' => 25, 'nb_repetition' => 12],
        ]);
        // --- 03/10 | PUSH ---
        DB::table('performance')->insert([
            ['workout_id' => 17, 'exercices_id' => 9, 'numero_series' => 1, 'poids' => 0, 'nb_repetition' => 80],
            ['workout_id' => 17, 'exercices_id' => 27, 'numero_series' => 1, 'poids' => 0, 'nb_repetition' => 30],
        ]);

        // --- 06/10 | PUSH ---
        DB::table('performance')->insert([
            ['workout_id' => 18, 'exercices_id' => 1, 'numero_series' => 1, 'poids' => 45, 'nb_repetition' => 12],
            ['workout_id' => 18, 'exercices_id' => 1, 'numero_series' => 2, 'poids' => 50, 'nb_repetition' => 12],
            ['workout_id' => 18, 'exercices_id' => 1, 'numero_series' => 3, 'poids' => 50, 'nb_repetition' => 10],

            ['workout_id' => 18, 'exercices_id' => 2, 'numero_series' => 1, 'poids' => 23, 'nb_repetition' => 12],
            ['workout_id' => 18, 'exercices_id' => 2, 'numero_series' => 2, 'poids' => 23, 'nb_repetition' => 12],
            ['workout_id' => 18, 'exercices_id' => 2, 'numero_series' => 3, 'poids' => 23, 'nb_repetition' => 12],

            ['workout_id' => 18, 'exercices_id' => 47, 'numero_series' => 1, 'poids' => 72, 'nb_repetition' => 12],
            ['workout_id' => 18, 'exercices_id' => 47, 'numero_series' => 2, 'poids' => 72, 'nb_repetition' => 12],
            ['workout_id' => 18, 'exercices_id' => 47, 'numero_series' => 3, 'poids' => 72, 'nb_repetition' => 12],

            ['workout_id' => 18, 'exercices_id' => 6, 'numero_series' => 1, 'poids' => 45, 'nb_repetition' => 12],
            ['workout_id' => 18, 'exercices_id' => 6, 'numero_series' => 2, 'poids' => 45, 'nb_repetition' => 12],
            ['workout_id' => 18, 'exercices_id' => 6, 'numero_series' => 3, 'poids' => 45, 'nb_repetition' => 12],


        ]);

        // --- SÉANCE DÉTENTE (entre 06/10 et 13/10) ---
        DB::table('performance')->insert([
            ['workout_id' => 19, 'exercices_id' => 6, 'numero_series' => 1, 'poids' => 25, 'nb_repetition' => 12],
            ['workout_id' => 19, 'exercices_id' => 6, 'numero_series' => 2, 'poids' => 20, 'nb_repetition' => 12],
            ['workout_id' => 19, 'exercices_id' => 6, 'numero_series' => 3, 'poids' => 15, 'nb_repetition' => 12],

            ['workout_id' => 19, 'exercices_id' => 9, 'numero_series' => 1, 'poids' => 70, 'nb_repetition' => 12],
            ['workout_id' => 19, 'exercices_id' => 9, 'numero_series' => 2, 'poids' => 70, 'nb_repetition' => 12],
            ['workout_id' => 19, 'exercices_id' => 9, 'numero_series' => 3, 'poids' => 70, 'nb_repetition' => 12],

            ['workout_id' => 19, 'exercices_id' => 32, 'numero_series' => 1, 'poids' => 20, 'nb_repetition' => 12],
            ['workout_id' => 19, 'exercices_id' => 32, 'numero_series' => 2, 'poids' => 20, 'nb_repetition' => 12],
            ['workout_id' => 19, 'exercices_id' => 32, 'numero_series' => 3, 'poids' => 20, 'nb_repetition' => 12],

            ['workout_id' => 19, 'exercices_id' => 30, 'numero_series' => 1, 'poids' => 12.5, 'nb_repetition' => 12],
            ['workout_id' => 19, 'exercices_id' => 30, 'numero_series' => 2, 'poids' => 12.5, 'nb_repetition' => 12],
            ['workout_id' => 19, 'exercices_id' => 30, 'numero_series' => 3, 'poids' => 12.5, 'nb_repetition' => 12],

            ['workout_id' => 19, 'exercices_id' => 37, 'numero_series' => 1, 'poids' => 10, 'nb_repetition' => 12],
            ['workout_id' => 19, 'exercices_id' => 37, 'numero_series' => 2, 'poids' => 12, 'nb_repetition' => 12],
            ['workout_id' => 19, 'exercices_id' => 37, 'numero_series' => 3, 'poids' => 12.5, 'nb_repetition' => 12],
        ]);

        // --- 13/10 | PUSH ---
        DB::table('performance')->insert([
            ['workout_id' => 20, 'exercices_id' => 1, 'numero_series' => 1, 'poids' => 45, 'nb_repetition' => 12],
            ['workout_id' => 20, 'exercices_id' => 1, 'numero_series' => 2, 'poids' => 45, 'nb_repetition' => 12],
            ['workout_id' => 20, 'exercices_id' => 1, 'numero_series' => 3, 'poids' => 40, 'nb_repetition' => 12],
            ['workout_id' => 20, 'exercices_id' => 1, 'numero_series' => 4, 'poids' => 35, 'nb_repetition' => 12],
            ['workout_id' => 20, 'exercices_id' => 1, 'numero_series' => 5, 'poids' => 35, 'nb_repetition' => 10],
            ['workout_id' => 20, 'exercices_id' => 1, 'numero_series' => 6, 'poids' => 30, 'nb_repetition' => 12],
            ['workout_id' => 20, 'exercices_id' => 1, 'numero_series' => 7, 'poids' => 20, 'nb_repetition' => 20],

            ['workout_id' => 20, 'exercices_id' => 7, 'numero_series' => 1, 'poids' => 7.5, 'nb_repetition' => 8],
            ['workout_id' => 20, 'exercices_id' => 7, 'numero_series' => 2, 'poids' => 5, 'nb_repetition' => 15],
            ['workout_id' => 20, 'exercices_id' => 7, 'numero_series' => 3, 'poids' => 5, 'nb_repetition' => 15],
            ['workout_id' => 20, 'exercices_id' => 7, 'numero_series' => 4, 'poids' => 5, 'nb_repetition' => 15],
            ['workout_id' => 20, 'exercices_id' => 7, 'numero_series' => 5, 'poids' => 5, 'nb_repetition' => 15],

            ['workout_id' => 20, 'exercices_id' => 6, 'numero_series' => 1, 'poids' => 17.5, 'nb_repetition' => 20],
            ['workout_id' => 20, 'exercices_id' => 6, 'numero_series' => 2, 'poids' => 20, 'nb_repetition' => 12],
            ['workout_id' => 20, 'exercices_id' => 6, 'numero_series' => 3, 'poids' => 20, 'nb_repetition' => 12],
            ['workout_id' => 20, 'exercices_id' => 6, 'numero_series' => 4, 'poids' => 20, 'nb_repetition' => 12],

            ['workout_id' => 20, 'exercices_id' => 37, 'numero_series' => 1, 'poids' => 7.5, 'nb_repetition' => 12],
            ['workout_id' => 20, 'exercices_id' => 37, 'numero_series' => 2, 'poids' => 5, 'nb_repetition' => 12],

            ['workout_id' => 20, 'exercices_id' => 10, 'numero_series' => 1, 'poids' => 0, 'nb_repetition' => 15],
            ['workout_id' => 20, 'exercices_id' => 10, 'numero_series' => 2, 'poids' => 0, 'nb_repetition' => 15],
            ['workout_id' => 20, 'exercices_id' => 10, 'numero_series' => 3, 'poids' => 0, 'nb_repetition' => 15],
        ]);

        // --- 14/10 | PULL ---
        DB::table('performance')->insert([
            ['workout_id' => 21, 'exercices_id' => 22, 'numero_series' => 1, 'poids' => 30, 'nb_repetition' => 12],
            ['workout_id' => 21, 'exercices_id' => 22, 'numero_series' => 2, 'poids' => 40, 'nb_repetition' => 10],
            ['workout_id' => 21, 'exercices_id' => 22, 'numero_series' => 3, 'poids' => 35, 'nb_repetition' => 12],
            ['workout_id' => 21, 'exercices_id' => 22, 'numero_series' => 4, 'poids' => 30, 'nb_repetition' => 12],
            ['workout_id' => 21, 'exercices_id' => 22, 'numero_series' => 5, 'poids' => 25, 'nb_repetition' => 15],

            ['workout_id' => 21, 'exercices_id' => 26, 'numero_series' => 1, 'poids' => 27, 'nb_repetition' => 12],
            ['workout_id' => 21, 'exercices_id' => 26, 'numero_series' => 2, 'poids' => 27, 'nb_repetition' => 12],
            ['workout_id' => 21, 'exercices_id' => 26, 'numero_series' => 3, 'poids' => 32, 'nb_repetition' => 12],
            ['workout_id' => 21, 'exercices_id' => 26, 'numero_series' => 4, 'poids' => 39, 'nb_repetition' => 12],
            ['workout_id' => 21, 'exercices_id' => 26, 'numero_series' => 5, 'poids' => 39, 'nb_repetition' => 12],

            ['workout_id' => 21, 'exercices_id' => 35, 'numero_series' => 1, 'poids' => 50, 'nb_repetition' => 12],
            ['workout_id' => 21, 'exercices_id' => 35, 'numero_series' => 2, 'poids' => 68, 'nb_repetition' => 12],
            ['workout_id' => 21, 'exercices_id' => 35, 'numero_series' => 3, 'poids' => 63, 'nb_repetition' => 12],
            ['workout_id' => 21, 'exercices_id' => 35, 'numero_series' => 4, 'poids' => 50, 'nb_repetition' => 12],
            ['workout_id' => 21, 'exercices_id' => 35, 'numero_series' => 5, 'poids' => 45, 'nb_repetition' => 12],
            ['workout_id' => 21, 'exercices_id' => 35, 'numero_series' => 6, 'poids' => 41, 'nb_repetition' => 12],
            ['workout_id' => 21, 'exercices_id' => 35, 'numero_series' => 7, 'poids' => 27, 'nb_repetition' => 12],
        ]);

        // --- 15/10 | LEGS ---
        DB::table('performance')->insert([
            ['workout_id' => 22, 'exercices_id' => 40, 'numero_series' => 1, 'poids' => 50, 'nb_repetition' => 12],
            ['workout_id' => 22, 'exercices_id' => 40, 'numero_series' => 2, 'poids' => 45, 'nb_repetition' => 12],
            ['workout_id' => 22, 'exercices_id' => 40, 'numero_series' => 3, 'poids' => 45, 'nb_repetition' => 12],
            ['workout_id' => 22, 'exercices_id' => 40, 'numero_series' => 4, 'poids' => 45, 'nb_repetition' => 12],
            ['workout_id' => 22, 'exercices_id' => 40, 'numero_series' => 5, 'poids' => 45, 'nb_repetition' => 12],

            ['workout_id' => 22, 'exercices_id' => 47, 'numero_series' => 1, 'poids' => 0, 'nb_repetition' => 20],
            ['workout_id' => 22, 'exercices_id' => 47, 'numero_series' => 2, 'poids' => 0, 'nb_repetition' => 20],
            ['workout_id' => 22, 'exercices_id' => 47, 'numero_series' => 3, 'poids' => 0, 'nb_repetition' => 20],
            ['workout_id' => 22, 'exercices_id' => 47, 'numero_series' => 4, 'poids' => 0, 'nb_repetition' => 20],

            ['workout_id' => 22, 'exercices_id' => 43, 'numero_series' => 1, 'poids' => 20, 'nb_repetition' => 12],
            ['workout_id' => 22, 'exercices_id' => 43, 'numero_series' => 2, 'poids' => 20, 'nb_repetition' => 12],
            ['workout_id' => 22, 'exercices_id' => 43, 'numero_series' => 3, 'poids' => 20, 'nb_repetition' => 12],
        ]);

        // --- 17/10 | PUSH ---
        DB::table('performance')->insert([
            ['workout_id' => 23, 'exercices_id' => 9, 'numero_series' => 1, 'poids' => 100, 'nb_repetition' => 12],
            ['workout_id' => 23, 'exercices_id' => 9, 'numero_series' => 2, 'poids' => 100, 'nb_repetition' => 8],
            ['workout_id' => 23, 'exercices_id' => 9, 'numero_series' => 3, 'poids' => 70, 'nb_repetition' => 15],

            ['workout_id' => 23, 'exercices_id' => 6, 'numero_series' => 1, 'poids' => 54, 'nb_repetition' => 10],
            ['workout_id' => 23, 'exercices_id' => 6, 'numero_series' => 2, 'poids' => 54, 'nb_repetition' => 12],
            ['workout_id' => 23, 'exercices_id' => 6, 'numero_series' => 3, 'poids' => 54, 'nb_repetition' => 12],

            ['workout_id' => 23, 'exercices_id' => 37, 'numero_series' => 1, 'poids' => 18, 'nb_repetition' => 12],
            ['workout_id' => 23, 'exercices_id' => 37, 'numero_series' => 2, 'poids' => 18, 'nb_repetition' => 12],
            ['workout_id' => 23, 'exercices_id' => 37, 'numero_series' => 3, 'poids' => 23, 'nb_repetition' => 8],

            ['workout_id' => 23, 'exercices_id' => 4, 'numero_series' => 1, 'poids' => 15, 'nb_repetition' => 15],
            ['workout_id' => 23, 'exercices_id' => 4, 'numero_series' => 2, 'poids' => 15, 'nb_repetition' => 15],
            ['workout_id' => 23, 'exercices_id' => 4, 'numero_series' => 3, 'poids' => 15, 'nb_repetition' => 15],
        ]);




    }
}
