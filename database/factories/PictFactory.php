<?php

use Faker\Generator as Faker;

$factory->define(\App\Pict::class, function (Faker $faker) {
    return [
        'question' => $faker->sentence,
        'answer' => $faker->word,
    ];
});
