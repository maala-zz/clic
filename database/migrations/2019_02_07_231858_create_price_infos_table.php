<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_infos', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('product_id')->unsigned(); // increments type generate unsigned integer!
            $table->double('cost', 10, 3)->nullable(); // double , number of digits before the comma , number of digits after it!
            $table->integer('msrp')->nullable(); // what does msrp abbreviate for!!!
            $table->integer('display_type')->defalut(-1); // indifferent value! idk even what this field means!!
            $table->timestamps();
            // set foreign keys options
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('price_infos');
    }
}
