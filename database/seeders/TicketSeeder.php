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
            ['ticExpDate' => '2024-06-19', 'ticPrice' => '100000'],
            ['ticExpDate' => '2024-07-19', 'ticPrice' => '100000'],
            ['ticExpDate' => '2024-08-19', 'ticPrice' => '100000'],
            ['ticExpDate' => '2024-09-19', 'ticPrice' => '100000'],
            ['ticExpDate' => '2024-10-19', 'ticPrice' => '100000'],
            ['ticExpDate' => '2024-11-19', 'ticPrice' => '100000'],
            ['ticExpDate' => '2024-12-19', 'ticPrice' => '100000'],
            ['ticExpDate' => '2025-01-19', 'ticPrice' => '100000'],
            ['ticExpDate' => '2025-02-19', 'ticPrice' => '100000'],
            ['ticExpDate' => '2025-03-19', 'ticPrice' => '100000'],
            ['ticExpDate' => '2025-04-19', 'ticPrice' => '100000'],
        ]);
    }
}
