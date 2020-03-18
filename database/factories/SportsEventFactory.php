<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SportsEvent;
use Faker\Generator as Faker;

$factory->define(SportsEvent::class, function (Faker $faker) {
    return [
        'slug' => substr($faker->unique()->slug, 0, 255),
        'title' => substr($faker->sentence, 0, 255),
        'starting_at' => $faker->dateTimeBetween('-7 days', '+ 60 days', 'UTC')
    ];
});
