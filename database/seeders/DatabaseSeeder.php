<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\TicketSeeder;
use Database\Seeders\TiransactionDetailSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => 'Fandi',
        //     'email' => 'user@gmail.com',
        //     'password' => bcrypt('user')
        // ]);
        \App\Models\User::factory(11)->create();
        $this->call([
            AdminSeeder::class,
            CategorySeeder::class,
            PlaceSeeder::class,
            ReviewSeeder::class,
            StatusSeeder::class,
            TicketSeeder::class,
            TransactionSeeder::class,
            TransactionDetailSeeder::class
        ]);
    }
}
