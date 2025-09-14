<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FavoritesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('favorites')->insert([
            'user_id' => '1',
            'workout_template_id' => '1',
        ]);
        DB::table('favorites')->insert([
            'user_id' => '1',
            'workout_template_id' => '2',
        ]);
        DB::table('favorites')->insert([
            'user_id' => '1',
            'workout_template_id' => '3',
        ]);
    }
}
