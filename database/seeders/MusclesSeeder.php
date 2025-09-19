<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MusclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('muscles')->insert([
            'name' => 'Dos'
        ]);
        DB::table('muscles')->insert([
            'name' => 'Pectoraux'
        ]);
        DB::table('muscles')->insert([
            'name' => 'Épaules'
        ]);
        DB::table('muscles')->insert([
            'name' => 'Biceps'
        ]);
        DB::table('muscles')->insert([
            'name' => 'Triceps'
        ]);
        DB::table('muscles')->insert([
            'name' => 'Avant-bras'
        ]);
        DB::table('muscles')->insert([
            'name' => 'Quadriceps'
        ]);
        DB::table('muscles')->insert([
            'name' => 'Iscio'
        ]);
        DB::table('muscles')->insert([
            'name' => 'Mollet'
        ]);
        DB::table('muscles')->insert([
            'name' => 'Abdominaux'
        ]);
        DB::table('muscles')->insert([
            'name' => 'Trapèzes'
        ]);
    }
}
