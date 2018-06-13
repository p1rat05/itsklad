<?php

use Illuminate\Database\Seeder;

class TransactionHistoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\TransactionHistory::class, 10)->create();
    }
}
