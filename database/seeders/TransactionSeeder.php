<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::all();
        DB::table('transactions')->insert([
            ['userId' => $user[0]->id, 'ticId' => '1', 'transQty' => '2', 'transStatus' => 'Pending'],
            ['userId' => $user[1]->id, 'ticId' => '2', 'transQty' => '1', 'transStatus' => 'Pending'],
            ['userId' => $user[2]->id, 'ticId' => '3', 'transQty' => '3', 'transStatus' => 'Pending'],
            ['userId' => $user[3]->id, 'ticId' => '4', 'transQty' => '4', 'transStatus' => 'Pending'],
            ['userId' => $user[4]->id, 'ticId' => '5', 'transQty' => '5', 'transStatus' => 'Pending'],
            ['userId' => $user[5]->id, 'ticId' => '6', 'transQty' => '2', 'transStatus' => 'Pending'],
            ['userId' => $user[6]->id, 'ticId' => '7', 'transQty' => '3', 'transStatus' => 'Pending'],
            ['userId' => $user[7]->id, 'ticId' => '8', 'transQty' => '2', 'transStatus' => 'Pending'],
            ['userId' => $user[8]->id, 'ticId' => '9', 'transQty' => '4', 'transStatus' => 'Pending'],
            ['userId' => $user[9]->id, 'ticId' => '10', 'transQty' => '1', 'transStatus' => 'Pending'],
            ['userId' => $user[10]->id, 'ticId' => '11', 'transQty' => '3', 'transStatus' => 'Pending'],
        ]);
    }
}
