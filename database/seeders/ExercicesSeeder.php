<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\table;

class ExercicesSeeder extends Seeder
{
    public function run(): void{
        DB::table('exercices')->insert([
            // --- Pecs / Push ---
            ['id' => 1, 'name' => 'Machine incliné pec', 'muscle_id' => 2, 'user_id' => 1, 'public' => true],
            ['id' => 2, 'name' => 'Écarté poulie basse', 'muscle_id' => 2, 'user_id' => 1, 'public' => true],
            ['id' => 3, 'name' => 'Développé militaire machine', 'muscle_id' => 3, 'user_id' => 1, 'public' => true],
            ['id' => 4, 'name' => 'Élévation latérale haltères', 'muscle_id' => 3, 'user_id' => 1, 'public' => true],
            ['id' => 5, 'name' => 'Barre au front', 'muscle_id' => 5, 'user_id' => 1, 'public' => true],
            ['id' => 6, 'name' => 'Triceps poulie haute', 'muscle_id' => 5, 'user_id' => 1, 'public' => true],
            ['id' => 7, 'name' => 'Tirage poulie haute triceps corde', 'muscle_id' => 5, 'user_id' => 1, 'public' => true],
            ['id' => 8, 'name' => 'Poulie over head un bras', 'muscle_id' => 5, 'user_id' => 1, 'public' => true],
            ['id' => 9, 'name' => 'Dips machine', 'muscle_id' => 5, 'user_id' => 1, 'public' => true],
            ['id' => 10, 'name' => 'Pompes', 'muscle_id' => 2, 'user_id' => 1, 'public' => true],
            ['id' => 11, 'name' => 'Pec fly machine', 'muscle_id' => 2, 'user_id' => 1, 'public' => true],
            ['id' => 12, 'name' => 'Développé couché', 'muscle_id' => 2, 'user_id' => 1, 'public' => true],
            ['id' => 13, 'name' => 'Pec poulie basse', 'muscle_id' => 2, 'user_id' => 1, 'public' => true],
            ['id' => 14, 'name' => 'Pec machine classique', 'muscle_id' => 2, 'user_id' => 1, 'public' => true],
            ['id' => 15, 'name' => 'Pec machine couché', 'muscle_id' => 2, 'user_id' => 1, 'public' => true],
            ['id' => 16, 'name' => 'Écarté poulie haute', 'muscle_id' => 2, 'user_id' => 1, 'public' => true],
            ['id' => 17, 'name' => 'Élévation latérale poulie', 'muscle_id' => 3, 'user_id' => 1, 'public' => true],
            ['id' => 18, 'name' => 'Élévation latérale banc incliné', 'muscle_id' => 3, 'user_id' => 1, 'public' => true],
            ['id' => 19, 'name' => 'Élévation latérale machine', 'muscle_id' => 3, 'user_id' => 1, 'public' => true],
            ['id' => 20, 'name' => 'Développé incliné machine', 'muscle_id' => 2, 'user_id' => 1, 'public' => true],

            // --- Dos / Pull ---
            ['id' => 21, 'name' => 'Tirage vertical ATX', 'muscle_id' => 1, 'user_id' => 1, 'public' => true],
            ['id' => 22, 'name' => 'Tirage vertical poulie haute', 'muscle_id' => 1, 'user_id' => 1, 'public' => true],
            ['id' => 23, 'name' => 'Tirage horizontal poulie', 'muscle_id' => 1, 'user_id' => 1, 'public' => true],
            ['id' => 24, 'name' => 'Tirage horizontal unilatéral', 'muscle_id' => 1, 'user_id' => 1, 'public' => true],
            ['id' => 25, 'name' => 'Tirage horizontal deux poignées', 'muscle_id' => 1, 'user_id' => 1, 'public' => true],
            ['id' => 26, 'name' => 'Rowing machine', 'muscle_id' => 1, 'user_id' => 1, 'public' => true],
            ['id' => 27, 'name' => 'Traction pronation', 'muscle_id' => 1, 'user_id' => 1, 'public' => true],
            ['id' => 28, 'name' => 'Traction libre', 'muscle_id' => 1, 'user_id' => 1, 'public' => true],
            ['id' => 29, 'name' => 'Tirage vertical derrière la tête', 'muscle_id' => 1, 'user_id' => 1, 'public' => true],

            // --- Bras ---
            ['id' => 30, 'name' => 'Curl marteau haltères', 'muscle_id' => 4, 'user_id' => 1, 'public' => true],
            ['id' => 31, 'name' => 'Curl poulie haute', 'muscle_id' => 4, 'user_id' => 1, 'public' => true],
            ['id' => 32, 'name' => 'Curl machine pupitre', 'muscle_id' => 4, 'user_id' => 1, 'public' => true],
            ['id' => 33, 'name' => 'Biceps poulie haute à genoux', 'muscle_id' => 4, 'user_id' => 1, 'public' => true],
            ['id' => 34, 'name' => 'Biceps poulie bizarre', 'muscle_id' => 4, 'user_id' => 1, 'public' => true],
            ['id' => 35, 'name' => 'Curl marteau poulie corde', 'muscle_id' => 4, 'user_id' => 1, 'public' => true],
            ['id' => 36, 'name' => 'Triceps poulie unilatérale', 'muscle_id' => 5, 'user_id' => 1, 'public' => true],
            ['id' => 37, 'name' => 'Triceps unilatéral poulie milieu', 'muscle_id' => 5, 'user_id' => 1, 'public' => true],

            // --- Épaules / Arrières ---
            ['id' => 38, 'name' => 'Arrière épaule poulie', 'muscle_id' => 3, 'user_id' => 1, 'public' => true],
            ['id' => 39, 'name' => 'Avant bras poulie', 'muscle_id' => 6, 'user_id' => 1, 'public' => true],

            // --- Jambes / Legs ---
            ['id' => 40, 'name' => 'Leg extension', 'muscle_id' => 7, 'user_id' => 1, 'public' => true],
            ['id' => 41, 'name' => 'Squat belt', 'muscle_id' => 7, 'user_id' => 1, 'public' => true],
            ['id' => 42, 'name' => 'Kick back ischio', 'muscle_id' => 7, 'user_id' => 1, 'public' => true],
            ['id' => 43, 'name' => 'Kick ass machine', 'muscle_id' => 7, 'user_id' => 1, 'public' => true],
            ['id' => 44, 'name' => 'Hip thrust', 'muscle_id' => 7, 'user_id' => 1, 'public' => true],
            ['id' => 45, 'name' => 'Aducteur intérieur', 'muscle_id' => 7, 'user_id' => 1, 'public' => true],
            ['id' => 46, 'name' => 'Aducteur extérieur', 'muscle_id' => 7, 'user_id' => 1, 'public' => true],
            ['id' => 47, 'name' => 'Squat à vide', 'muscle_id' => 7, 'user_id' => 1, 'public' => true],
        ]);
    }

}
