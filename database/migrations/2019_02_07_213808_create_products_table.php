<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name') ;
            $table->string('sku') ;
            $table->boolean('active') ;
            $table->integer('current_price') ;
            $table->integer('old_price') ;
            $table->integer('quantity') ;
            $table->integer('unlimited_quantity') ;
            $table->integer('tax_type') ;
            $table->text('brief') ;
            $table->text('description') ;
            $table->string('url') ;
            $table->string('meta_title', 50) ;
            $table->string('meta_description') ;
            $table->string('meta_keywords') ;
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
        Schema::dropIfExists('products');
    }
}
