<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSimilarProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('similar_product', function (Blueprint $table) {
            $table->integer('product_id')->unsigned()->index() ;
            $table->integer('similar_product_id')->unsigned()->index() ;
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('similar_product_id')->references('id')->on('products')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('similar_product');
    }
}
