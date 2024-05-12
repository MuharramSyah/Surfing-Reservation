<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB; // Use DB facade for simpler inserts

class Boardseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $boards = [
            [
                "name" => "Longboard",
                'created_at' => Carbon::now(), // Use Carbon for timestamps
                'updated_at' => Carbon::now(),
            ],
            [
                "name" => "Funboard",
                'created_at' => Carbon::now(), // Use Carbon for timestamps
                'updated_at' => Carbon::now(),
            ],
            [
                "name" => "Shortboard",
                'created_at' => Carbon::now(), // Use Carbon for timestamps
                'updated_at' => Carbon::now(),
            ],
            [
                "name" => "Fishboard",
                'created_at' => Carbon::now(), // Use Carbon for timestamps
                'updated_at' => Carbon::now(),
            ],
            [
                "name" => "Gunboard",
                'created_at' => Carbon::now(), // Use Carbon for timestamps
                'updated_at' => Carbon::now(),
            ],
        ];
        DB::table('boards')->insert($boards);
    }
}
