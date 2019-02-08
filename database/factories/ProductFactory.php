<?php

use Faker\Generator as Faker;
use App\Product ;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->title ,
        'sku' => $faker->name ,
        'active' => $faker->boolean() ,
        'current_price' => $faker->randomFloat(NULL, 0, 1000000),
        'old_price' => $faker->randomFloat(NULL, 0, 1000000) ,
        'quantity' => $faker->numberBetween(0,20) ,
        'unlimited_quantity' => $faker->numberBetween(0,20) ,
        'tax_type' => $faker->numberBetween(0,3) ,
        'brief' => $faker->text ,
        'description' => $faker->text,
        'url' => $faker->url
    ];
});
