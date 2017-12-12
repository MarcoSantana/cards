<?php

use Faker\Generator as Faker;

$factory->define(App\Card::class, function (Faker $faker) {
    return [
        //
        'front'=> $faker->randomHtml(2,3),
        'back' => $faker->randomHtml(2,3),
        'tags' => json_encode(array('lang' => $faker->languageCode(), 'pictures' => $faker->boolean())
)
    ];
});
