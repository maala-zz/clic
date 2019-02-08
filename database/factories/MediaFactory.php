<?php

use Faker\Generator as Faker;
use App\Media ;
use App\Product ;
$factory->define(Media::class, function (Faker $faker) {
    return [
        'product_id' => function(){
         return Product::inRandomOrder()->first()->id ;
        },
        'path' => $faker->name,
        'caption' => $faker->name,
        'main_photo' => $faker->boolean(),
        'sort_order' => $faker->numberBetween(0,10),
        'type' => $faker->numberBetween(0,10)
    ];
});
