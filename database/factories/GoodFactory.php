<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Good;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

$factory->define(Good::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'rate' => $faker->numberBetween($min = 1000, $max = 9000) ,
        'refundable_deposit' => $faker->numberBetween($min = 1000, $max = 9000) , 
        'ratings' => $faker->numberBetween($min = 1000, $max = 9000) ,
        'reviews' => $faker->text($maxNbChars = 200),
    ];
});
