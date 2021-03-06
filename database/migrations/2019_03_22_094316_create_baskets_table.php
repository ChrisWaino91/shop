<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('baskets', function (Blueprint $table) { 
            $table->Increments('id');
            $table->string('session_id');
            $table->integer('customer_id')->unsigned()->nullable()->references('id')->on('customers');
            $table->integer('total')->nullable();
            $table->boolean('completed');
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
        Schema::dropIfExists('baskets');
    }
}
