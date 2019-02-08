<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_product', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('product_id')->unsigned()->index(); // increments type generate unsigned integer!
            $table->integer('store_id')->unsigned(); // increments type generate unsigned integer!
            $table->timestamps();
              // set foreign keys up
              $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade') ;
              $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade') ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_product');
    }
}
