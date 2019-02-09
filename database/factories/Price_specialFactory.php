<?php

use Faker\Generator as Faker;
use App\Price_special ;
use App\Product ;
/**
 * $table->integer('product_id')->unsigned(); // increments type generate unsigned integer!
 * $table->date('from_date')->useCurrent();
 * $table->date('to_date')->useCurrent();
 */
$factory->define(Price_special::class, function (Faker $faker) {
    return [
        'product_id' => function () {
            // Get random product id as it's foreign key for product id
            /**
             * pick product id and check if it exists in price_special 
             * so we should pick another one because it should be unique 
             */
            while( true ){
                $prId = Product::inRandomOrder()->first()->id ;
                $temp = Price_special::where('product_id',$prId)->get() ;
                if( count($temp) == 0 )return $prId ; 
            }
        },
        'from_date' => $faker->dateTime() ,
        'to_date' => $faker->dateTime() ,
    ];
});
