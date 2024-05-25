<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction_details')->insert([
            ['transId' => '1', 'ticId' => '1'],
            ['transId' => '2', 'ticId' => '1'],
            ['transId' => '3', 'ticId' => '1'],
            ['transId' => '4', 'ticId' => '1'],
            ['transId' => '5', 'ticId' => '1'],
            ['transId' => '6', 'ticId' => '1'],
            ['transId' => '7', 'ticId' => '1'],
            ['transId' => '8', 'ticId' => '1'],
            ['transId' => '9', 'ticId' => '1'],
            ['transId' => '10', 'ticId' => '1'],
            ['transId' => '11', 'ticId' => '1'],
        ]);
    }
}
