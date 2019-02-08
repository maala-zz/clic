<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuantityInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quantity_infos', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('product_id')->unsigned()->index(); // increments type generate unsigned integer!
            $table->integer("min_qty_allowed")->default(0);
            $table->integer("max_qty_allowed")->default(0);
            $table->integer("out_of_stock_threshold")->default(0);
            $table->integer("stock_status")->default(1);
            $table->boolean("notify_for_quantity")->default(true);
            $table->integer("quantity_to_notify")->default(-1); // indifferent value!
            $table->boolean("sell_in_box")->default(false);
            $table->integer("items_per_box")->default(0);
            $table->boolean("allow_requesting_when_product_out_of_stock")->default(false);
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
        Schema::dropIfExists('quantity_infos');
    }
}
