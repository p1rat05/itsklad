<?php

use Illuminate\Database\Seeder;

class WarehousesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Warehouse::class, 2)->create();
//        DB::table('warehouses')->insert(
//            ['name' => str_random(10)],
//            ['name' => str_random(10)]
//        );
    }
}
