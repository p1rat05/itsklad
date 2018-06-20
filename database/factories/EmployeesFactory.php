<?php

use Faker\Generator as Faker;

$factory->define(App\Employee::class, function (Faker $faker) {
    return [
        name => $faker->name(),
        ADToken => $faker->sha256,
    ];
});
