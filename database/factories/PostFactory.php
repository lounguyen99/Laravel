<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Posts;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Posts::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomDigit,
        'content'=>$faker->realText,
        'created_at' => now(),
    ];
});
