<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Organization;

$factory->define(Organization::class, function (Faker $faker) {
    return [
        'org_name' => $faker->name,
        'org_addr' => Str::random(50),
    ];
});
