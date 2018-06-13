<?php

use Faker\Generator as Faker;

$factory->define(App\TransactionHistory::class, function (Faker $faker) {
    return [
        'login' => $faker->lastName,
    'userFullName' => $faker->name(),
    'artGroup' => $faker->word,
    'artTradeMark' => $faker->word,
    'artModel' => $faker->word,
    'articleData' => $faker->text(50),
    ];
});
