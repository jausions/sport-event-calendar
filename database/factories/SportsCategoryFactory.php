<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SportsCategory;
use Faker\Generator as Faker;

$factory->define(SportsCategory::class, function (Faker $faker) {
    return [
        'slug' => substr($faker->unique()->slug, 0, 30),
        'name' => $faker->domainWord,
    ];
});
