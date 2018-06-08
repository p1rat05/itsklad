<?php

use Faker\Generator as Faker;

$factory->define(App\Trademark::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});
