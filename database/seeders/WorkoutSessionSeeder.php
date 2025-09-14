<?php

namespace Database\Seeders;

use Carbon\Traits\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkoutSessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("workout_session")->insert([
            ['user_id'=> 1,
             'workout_id'=> 1,
             'dateofworkout' => Date("Y-m-d"),
            ]
        ]);
    }
}
