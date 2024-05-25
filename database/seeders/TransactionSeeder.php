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
            [
                'userId' => $user[0]->id,
                'transQty' => '2',
                'transStatus' => 1,
                'transExpired' => '2024-05-24 20:28:53'
            ],
            [
                'userId' => $user[1]->id,
                'transQty' => '1',
                'transStatus' => 1,
                'transExpired' => '2024-05-24 20:28:53'
            ],
            [
                'userId' => $user[2]->id,
                'transQty' => '3',
                'transStatus' => 1,
                'transExpired' => '2024-05-24 20:28:53'
            ],
            [
                'userId' => $user[3]->id,
                'transQty' => '4',
                'transStatus' => 1,
                'transExpired' => '2024-05-24 20:28:53'
            ],
            [
                'userId' => $user[4]->id,
                'transQty' => '5',
                'transStatus' => 1,
                'transExpired' => '2024-05-24 20:28:53'
            ],
            [
                'userId' => $user[5]->id,
                'transQty' => '2',
                'transStatus' => 1,
                'transExpired' => '2024-05-24 20:28:53'
            ],
            [
                'userId' => $user[6]->id,
                'transQty' => '3',
                'transStatus' => 1,
                'transExpired' => '2024-05-24 20:28:53'
            ],
            [
                'userId' => $user[7]->id,
                'transQty' => '2',
                'transStatus' => 1,
                'transExpired' => '2024-05-24 20:28:53'
            ],
            [
                'userId' => $user[8]->id,
                'transQty' => '4',
                'transStatus' => 1,
                'transExpired' => '2024-05-24 20:28:53'
            ],
            [
                'userId' => $user[9]->id,
                'transQty' => '1',
                'transStatus' => 1,
                'transExpired' => '2024-05-24 20:28:53'
            ],
            [
                'userId' => $user[10]->id,
                'transQty' => '3',
                'transStatus' => 1,
                'transExpired' => '2024-05-24 20:28:53'
            ],
        ]);
    }
}
