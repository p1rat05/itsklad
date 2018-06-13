<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserGroupsTableSeeder::class,
            UsersTableSeeder::class,
            WarehousesTableSeeder::class,
            ArticlesTableSeeder::class,
            ArtGroupsTableSeeder::class,
            TrademarksTableSeeder::class,
            TransactionHistoriesTableSeeder::class,
            ]);
    }
}
