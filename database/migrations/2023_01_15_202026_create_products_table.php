<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->integer('buy_price');
            $table->integer('minimum_price');
            $table->integer('sale_price');
            $table->string('brand');
            $table->string('qr_code');
            $table->string('qr_image');
            $table->string('image');
            $table->string('size');
            $table->string('colors');
            $table->string('description')->nullable();
            $table->string('status')->comment("Los estados pueden ser Disabled, Sold, OnSale");
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
