<?php

use Faker\Generator as Faker;

$factory->define(App\Procedure::class, function (Faker $faker) {
    return [
        'code' => $faker->numberBetween(10,60),
        'type' => $tipo = $faker->randomElement(['consulta', 'examen']),
        'name' => $tipo == 'consulta' ? 'consulta medica ' . $faker->word : 'examen '. $faker->word, 
        'description' => $faker->words(10, true),       
        'specialty_id' => function () {
            return factory(App\Specialty::class)->create()->id;
        },
    ];
});
