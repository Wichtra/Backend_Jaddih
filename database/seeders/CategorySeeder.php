<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'catName' => 'Religious',
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'catName' => 'Medis',
        ]);
        DB::table('categories')->insert([
            'id' => 3,
            'catName' => 'Culinary',
        ]);
        DB::table('categories')->insert([
            'id' => 4,
            'catName' => 'Accomodation',
        ]);
    }
}
