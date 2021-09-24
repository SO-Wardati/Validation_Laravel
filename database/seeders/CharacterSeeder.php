<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            [
                'name' => 'Lucky Luke',
                'creation' => 1947,
                'bdName' => 'Lucky Luke',
                'drawer_id' => 1,
            ],
            [
                'name' => 'Tintin',
                'creation' => 1929,
                'bdName' => 'Les aventures de Tintin',
                'drawer_id' => 2,
            ],
            [
                'name' => 'Gaston Lagaffe',
                'creation' => 1957,
                'bdName' => 'Gaston',
                'drawer_id' => 3,
            ]
        ]);
    }
}
