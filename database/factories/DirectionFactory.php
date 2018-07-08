<?php

use Faker\Generator as Faker;

$factory->define(App\Direction::class, function (Faker $faker) {
    return [
        'direction_id' => function () {
            return factory(App\Partner::class)->create()->id;
        },
        'city' => $faker->city,
        'complement' => $faker->streetName,
        'neighborhood' => $faker->state,
        'state' => $faker->state,
        'street' => $faker->streetName,
        'number' => $faker->buildingNumber,
    ];
});
