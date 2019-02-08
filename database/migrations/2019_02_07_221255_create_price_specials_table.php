<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriceSpecialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_specials', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned(); // increments type generate unsigned integer!
            $table->date('from_date');
            $table->date('to_date');
            $table->timestamps();
            // set foreign keys options
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade') ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('price_specials');
    }
}
