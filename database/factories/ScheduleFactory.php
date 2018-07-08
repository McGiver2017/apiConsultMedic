<?php

use Faker\Generator as Faker;
use App\Procedure;
use App\Professional;

$factory->define(App\Schedule::class, function (Faker $faker) {
    $procedure = Procedure::get()->random();
    $professional = Professional::get()->random();
    return [
        'date' => date("Y") . "-" . date("m") . "-" . (date("d") + $faker->numberBetween(0,5)),
        'alert' => $faker->word,
        'info' => $faker->word,
        'arrivalOrder' => $faker->boolean,
        'price' => $faker->numberBetween(10,50),
        'procedure_id' => $procedure->id,
        'professional_id' => $professional->id
    
    ];
});
