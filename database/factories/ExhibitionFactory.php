<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Exhibition;
use App\Models\Site;
use App\Models\Organization;

/**
 * Assign random value for each column
 * The foreign keys would reference to a random existed tuple in the referenced table
 * */
$factory->define(Exhibition::class, function (Faker $faker) {
    $startingDateTime = $faker->dateTimeBetween('this week', '+1 months');
    $endingDateTime = $faker->dateTimeBetween($startingDateTime, '+2 months');
    return [
        'title' => Str::random(20),
        'description' => Str::random(200),
        'source_web_promote' => $faker->url,
        'source_web_name' => $faker->domainName,
        'on_sales' => 1 == rand(0, 1),
        'image_url' => $faker->imageUrl(),
        'start_datetime' => $startingDateTime,
        'end_datetime' => $endingDateTime,
        'site_id' => Site::all()->random(1)->first()->site_id,
        'show_unit' => Organization::all()->random(1)->first()->org_id,
    ];
});
