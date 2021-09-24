<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrawerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drawers')->insert([
            [
                'name' => 'Morris',
            ],
            [
                'name' => 'Hergé',
            ],
            [
                'name' => 'André Franquin',
            ]
        ]);
    }
}
