<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Places')->insert([
            'plaName' => 'Mecca',
            'plaLocation' => '39.8262,21.3125',
            'plaDescription' => 'Mecca is a city in the Hejazi region of Saudi Arabia.',
            'plaDistance' => 0,
            'categorieId' => 1
        ]);

        DB::table('Places')->insert([
            'plaName' => 'Medina',
            'plaLocation' => '39.5262, 21.4225',
            'plaDescription' => 'Medina is a city in western Saudi Arabia. In the city center,',
            'plaDistance' => 0,
            'categorieId' => 1
        ]);

        DB::table('Places')->insert([
            'plaName' => 'Madina Hospital',
            'plaLocation' => '39.8262,21.4225',
            'plaDescription' => 'Madina Hospital is a hospital in Medina, Saudi Arabia. ',
            'plaDistance' => 0,
            'categorieId' => 2
        ]);

        DB::table('Places')->insert([
            'plaName' => 'Al Baik Hospital',
            'plaLocation' => '39.8662,21.4245',
            'plaDescription' => 'Al Baik Hospital is a hospital in Jeddah, Saudi Arabia',
            'plaDistance' => 0,
            'categorieId' => 2
        ]);

        DB::table('Places')->insert([
            'plaName' => 'Delicious Diner',
            'plaLocation' => '39.8662,21.4245',
            'plaDescription' => 'Delicious Diner is a popular restaurant in Jeddah, Saudi Arabia.',
            'plaDistance' => 0,
            'categorieId' => 3
        ]);

        DB::table('Places')->insert([
            'plaName' => 'Tasty Tavern',
            'plaLocation' => '39.8662,21.4245',
            'plaDescription' => 'Tasty Tavern is a renowned eatery in Jeddah, Saudi Arabia.',
            'plaDistance' => 0,
            'categorieId' => 3
        ]);

        DB::table('Places')->insert([
            'plaName' => 'Comfortable Inn',
            'plaLocation' => '39.8662,21.4245',
            'plaDescription' => 'Comfortable Inn is a cozy hotel in Jeddah, Saudi Arabia.',
            'plaDistance' => 0,
            'categorieId' => 4
        ]);

        DB::table('Places')->insert([
            'plaName' => 'Relaxing Resort',
            'plaLocation' => '39.8662,21.4245',
            'plaDescription' => 'Relaxing Resort is a luxury resort in Jeddah, Saudi Arabia.',
            'plaDistance' => 0,
            'categorieId' => 4
        ]);
    }
}
