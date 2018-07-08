<?php

use Faker\Generator as Faker;

$factory->define(App\Hour::class, function (Faker $faker) {
    return [
        'schedule_id' => App\Schedule::get()->random()->id,
        'hour' => $faker->time($format = 'H:i:s', $max = 'now'),
        'estado' => 'libre'
    ];
});
