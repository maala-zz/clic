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
            $table->increments('id')->index();
            /**
             *  nullable for some values just to make it easier to test the database! 
             */
            $table->string('name')->nullable() ;
            $table->string('sku')->nullable() ;
            $table->boolean('active')->default(false) ;
            $table->double('current_price',15,5)->default(0.0) ;
            $table->double('old_price',15,5)->default(0.0) ;
            $table->integer('quantity')->default(0) ;
            $table->integer('unlimited_quantity')->default(0) ;
            $table->integer('tax_type')->default(0) ;
            $table->text('brief')->nullable() ;
            $table->text('description')->nullable() ;
            $table->string('url')->nullable() ;
            $table->string('meta_title', 50)->nullable() ;
            $table->string('meta_description')->nullable() ;
            $table->string('meta_keywords')->nullable() ;
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
