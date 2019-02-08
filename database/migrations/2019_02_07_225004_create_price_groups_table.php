<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriceGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('store_id');
            $table->integer('product_id')->unsigned(); // increments type generate unsigned integer!
            $table->integer('members_group_id');
            $table->integer('type');
            $table->integer('value');
            $table->integer('from_quantity');
            $table->integer('to_quantity');
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
        Schema::dropIfExists('price_groups');
    }
}
