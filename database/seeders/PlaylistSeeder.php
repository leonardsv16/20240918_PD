<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('playlists')->insert([
            ['name' => 'Chill Vibes', 'tag' => 'Relax'],
            ['name' => 'Workout Hits', 'tag' => 'Fitness'],
            ['name' => 'Top 40', 'tag' => 'Pop'],
        ]);
    }
}
