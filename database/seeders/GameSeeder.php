<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('games')->insert([
            ['name' => 'Minecraft', 'description' => 'Survive with friends, see the world, build and do much more!'],
            ['name' => 'Stardew valley', 'description' => 'Develop by working as a farmer in the village'],
            ['name' => 'Content Warning', 'description' => 'Film monsters and try to get as many views as possible.'],

        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}
