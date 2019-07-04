<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Groups;
use Faker\Generator as Faker;
use App\Students;

$factory->define(Groups::class, function (Faker $faker) {
    $faker = \Faker\factory::create('ru_RU');
    return [
        'title' => $faker->city,
        'description' => $faker->unique()->word,
        'average_math' => rand(2,5),
        'average_rus' => rand(2,5),
        'average_eng' => rand(2,5),
    ];
});

$factory->define(Students::class, function (Faker $faker) {
    $faker = \Faker\factory::create('ru_RU');
    return [
        'name' => $faker->name,
        'birthday' => $faker->date,

    ];
});
