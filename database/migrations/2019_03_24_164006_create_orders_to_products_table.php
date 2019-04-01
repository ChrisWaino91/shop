<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersToProductsTable extends Migration
{
    /** 
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('orders_to_products', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('basket')->unsigned();
            $table->integer('product_id');
            $table->string('product_title');
            $table->integer('product_price');
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
        Schema::dropIfExists('orders_to_products');
    }
}
