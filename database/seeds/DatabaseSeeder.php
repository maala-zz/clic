<?php

use Illuminate\Database\Seeder;
use App\Price_special ;
use App\Product ;
use App\Store ;
use App\Media ;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $products = factory(Product::class, 10)->create();
        $product_specials = factory(Price_special::class, 4)->create();
        $stores = factory(Store::class, 4)->create();
        $media = factory(Media::class, 4)->create();
    }
}
