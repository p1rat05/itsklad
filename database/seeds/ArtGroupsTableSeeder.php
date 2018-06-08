<?php

use Illuminate\Database\Seeder;

class ArtGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ArtGroup::class, 32)->create();
    }
}
