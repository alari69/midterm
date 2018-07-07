<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement($array = array ('Ford','Honda','Toyota')),
        'model' => $faker->name,
        'year' => $faker->number,
    ];
});
