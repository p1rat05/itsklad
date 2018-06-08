<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'idArtGroup' => rand(0, 3),
        'model' => $faker->word,
        'idTM' => rand(0, 10),
        'idParent' => 0,
        'idUser' => rand(0, 10),
        'DateBought' => $faker->dateTime(),
        'ArtData'=> $faker->text(100),
        'Description'=> $faker->text(100),
    ];
});
