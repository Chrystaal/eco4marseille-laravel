<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreign('afterlife_id')->references('id')->on('afterlife');
            $table->foreign('product_use_id')->references('id')->on('product_use');
            $table->foreign('distribution_id')->references('id')->on('distribution');
            $table->foreign('sub_assembly_id')->references('id')->on('sub_assembly');
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
        Schema::dropIfExists('product');
    }
}
