<?php

use Faker\Generator as Faker;

$factory->define(App\Hint::class, function (Faker $faker) {
    return [
        'description' => $faker->sentence,
        'pict_id' => factory(\App\Pict::class)->create()->id,
    ];
});
