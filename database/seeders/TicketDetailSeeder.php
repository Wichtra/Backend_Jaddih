<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tiket_details')->insert([
            ['ticId' => '1'],
            ['ticId' => '1'],
            ['ticId' => '2'],
            ['ticId' => '2'],
            ['ticId' => '2'],
            ['ticId' => '3'],
            ['ticId' => '3'],
            ['ticId' => '4'],
            ['ticId' => '4'],
            ['ticId' => '4'],
            ['ticId' => '4'],
            ['ticId' => '5'],
            ['ticId' => '5'],
            ['ticId' => '6'],
            ['ticId' => '6'],
            ['ticId' => '7'],
            ['ticId' => '7'],
            ['ticId' => '7'],
            ['ticId' => '7'],
            ['ticId' => '8'],
            ['ticId' => '8'],
            ['ticId' => '9'],
            ['ticId' => '9'],
            ['ticId' => '9'],
            ['ticId' => '10'],
            ['ticId' => '10'],
            ['ticId' => '10'],
            ['ticId' => '10'],
            ['ticId' => '10'],
            ['ticId' => '11'],
            ['ticId' => '11'],
            ['ticId' => '11'],

        ]);
    }
}
