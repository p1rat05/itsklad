<?php

use Illuminate\Database\Seeder;

class UserGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\UserGroup::class, 10)->create();
//        DB::table('user_groups')->insert(
//            ['name' => str_random(10)]
//            );
    }
}
