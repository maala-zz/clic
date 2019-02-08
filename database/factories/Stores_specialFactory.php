<?php

use Faker\Generator as Faker;
use App\Store ;
$factory->define(App\Store::class, function (Faker $faker) {
    return [
        'name'=> $faker->name
    ];
});
