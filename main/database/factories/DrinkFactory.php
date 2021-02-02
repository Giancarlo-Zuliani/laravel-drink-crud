<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Drink;
use Faker\Generator as Faker;

$factory->define(Drink::class, function (Faker $faker) {
    return [
        'name' => $faker -> word,
        'ingredient_one' => $faker -> word,
        'ingredient_two' => $faker -> word,
        'ingredient_three' => $faker  -> word,
        'alcool' => $faker -> numberBetween(10,50)
    ];
});
