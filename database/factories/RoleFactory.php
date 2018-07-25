<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    $tname = $faker->word;
    return [
        'name' => $tname,
        'slug' => $faker->slug($tname),
    ];
});
