<?php

use Faker\Generator as Faker;
use App\Models\Organization;

/**Assign random value for each column */
$factory->define(Organization::class, function (Faker $faker) {
    return [
        'org_name' => $faker->name,
        'org_addr' => $faker->address,
    ];
});
