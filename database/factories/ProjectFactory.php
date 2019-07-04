<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Groups;
use Faker\Generator as Faker;
use App\Students;

$factory->define(Groups::class, function (Faker $faker) {
    $faker = \Faker\factory::create('ru_RU');
    return [
        'title' => $faker ->unique() -> numberBetween(1,10),
        'description' => $faker->unique()->sentence($nbWords=4),
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
        'img' =>$faker ->imageUrl(640,640,'cats')

    ];
});
