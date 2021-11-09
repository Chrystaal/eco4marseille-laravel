<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductUse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_use', function (Blueprint $table) {
            $table->id();
            $table->string('glue');
            $table->string('paint');
            $table->unsignedBigInteger('lifespan_id');
            $table->foreign('lifespan_id')->references('id')->on('lifespan');
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
        //
    }
}
