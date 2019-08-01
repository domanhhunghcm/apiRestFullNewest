<?php

use Faker\Generator as Faker;

$factory->define(App\review::class, function (Faker $faker) {
    return [
        'product_id'=>$faker->numberBetween($min = 1, $max = 100),
        'customer'=>$faker->name,
        'review'=>$faker->text($maxNbChars = 200),
        'star'=>$faker->numberBetween($min = 0, $max = 5),
    ];
});
