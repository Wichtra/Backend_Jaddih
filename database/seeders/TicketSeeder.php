<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tikets')->insert([
            ['ticName' => 'Tiket masuk', 'ticPrice' => '100000'],
        ]);
    }
}
