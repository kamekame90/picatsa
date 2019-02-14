<?php

use Faker\Generator as Faker;

$factory->define(App\Vignette::class, function (Faker $faker) {
    return [
      'legende' => $faker->word,
      'description' => $faker->word,
      'url' => $faker->word
        ];
});
