<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            MusclesSeeder::class,
            UsersSeeder::class,
            ExercicesSeeder::class,
            WorkoutTemplateSeeder::class,
            WorkoutExercicesSeeder::class,
            WorkoutSessionSeeder::class,
            PerformanceSeeder::class,
            FavoritesSeeder::class,
        ]);
    }
}
