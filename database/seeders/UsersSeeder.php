<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'login' => 'Maxirrx',
            'email' => 'max2005.roux@gmail.com',
            'password' => Hash::make('23032005'),
            'age' => 20,
            'weight' => 78,
            'height' => 180,
            'gender' => true,
        ]);
    }
}
