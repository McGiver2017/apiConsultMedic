<?php

use Faker\Generator as Faker;

$factory->define(App\Partner::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone' => $faker->PhoneNumber,
        'type' => $faker->randomElement(['company', 'independent']),
        'imageUrl' => $faker->imageUrl($width = 640, $height = 480)
    ];
});
