<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDisplaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_displays', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('product_id')->unsigned()->index(); // increments type generate unsigned integer!
            $table->mediumText('content')->nullable();
            $table->timestamps();
             // set foreign keys up
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
        Schema::dropIfExists('product_displays');
    }
}
