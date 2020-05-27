<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\DateFactory;
use App\Models\Site;

/**Assign random value for each column */
$factory->define(Site::class, function (Faker $faker) {
    return [
        'site_name' => Str::random(30),
        'site_addr' => $faker->address,
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude
    ];
});
