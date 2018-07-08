<?php

use Faker\Generator as Faker;
use App\Partner;

$factory->define(App\Professional::class, function (Faker $faker) {
    $partner = Partner::get()->random();
    return [
        'name' => $faker->name,
        'lastName' => $faker->lastName,
        'partner_id' => $partner->id
    ];
});
