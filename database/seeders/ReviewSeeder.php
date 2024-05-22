<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::all();
        DB::table('reviews')->insert([
            ['userId' => $user[0]->id, 'revRating' => '5', 'revComment' => 'Great'],
            ['userId' => $user[1]->id, 'revRating' => '2', 'revComment' => 'Good'],
            ['userId' => $user[2]->id, 'revRating' => '5', 'revComment' => 'Amazing'],
            ['userId' => $user[3]->id, 'revRating' => '5', 'revComment' => 'Great '],
            ['userId' => $user[4]->id, 'revRating' => '1', 'revComment' => 'So bad'],
            ['userId' => $user[5]->id, 'revRating' => '4', 'revComment' => 'Great'],
            ['userId' => $user[6]->id, 'revRating' => '5', 'revComment' => 'Great place to stay'],
            ['userId' => $user[7]->id, 'revRating' => '4', 'revComment' => 'wow'],
            ['userId' => $user[8]->id, 'revRating' => '5', 'revComment' => 'the best placve ever'],
            ['userId' => $user[9]->id, 'revRating' => '3', 'revComment' => 'Not bad'],
            ['userId' => $user[10]->id, 'revRating' => '5', 'revComment' => 'A good place for holiday'],
        ]);
    }
}
