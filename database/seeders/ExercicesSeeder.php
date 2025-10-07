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
                'muscle_id' => 2,
                'user_id' => 1,
                'public' => false,
            ],
            [
                'name' => 'Écarté à la poulie basse',
                'muscle_id' => 2,
                'user_id' => 1,
                'public' => false,
            ],
            [
                'name' => 'Développé militaire à la machine',
                'muscle_id' => 3,
                'user_id' => 1,
                'public' => false,
            ],
            [
                'name' => 'Élévation latéral aux haltères',
                'muscle_id' => 3,
                'user_id' => 1,
                'public' => false,
            ],
            [
                'name' => 'Barre au front aux haltères',
                'muscle_id' => 5,
                'user_id' => 1,
                'public' => false,
            ],
            [
                'name' => 'Tirage à la poulie haute',
                'muscle_id' => 5,
                'user_id' => 1,
                'public' => false,
            ],
            /////
            /////pull max
            [
                'name' => 'Tirage verticale à la poulie haute',
                'muscle_id' => 1,
                'user_id' => 1,
                'public' => false,
            ],
            [
                'name' => 'Tirage Horizontale à la poulie',
                'muscle_id' => 1,
                'user_id' => 1,
                'public' => false,
            ],
            [
                'name' => 'Curl marteau aux haltères',
                'muscle_id' => 4,
                'user_id' => 1,
                'public' => false,
            ],
            [
                'name' => 'Tiage biceps à la poulie haute',
                'muscle_id' => 4,
                'user_id' => 1,
                'public' => false,
            ],
            [
                'name' => "Arrière d'épaule à la poulie",
                'muscle_id' => 3,
                'user_id' => 1,
                'public' => false,
            ],
            [
                'name' => 'Avant bras à la poulie haute',
                'muscle_id' => 6,
                'user_id' => 1,
                'public' => false,
            ],
            /////
            /////jambes max

            /////
            [
                'name' => 'Développé couché',
                'muscle_id' => 2,
                'user_id' => 2,
                'public' => false,
            ],

            [
                'name' => 'Développé couché',
                'muscle_id' => 2,
                'user_id' => 2,
                'public' => false,
            ],
            [
                'name' => 'Tractions pronation',
                'muscle_id' => 1,
                'user_id' => 2,
                'public' => false,
            ],
            [
                'name' => 'Développé militaire',
                'muscle_id' => 3,
                'user_id' => 2,
                'public' => false,
            ]
        ]);
    }
}
