<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAfterlife extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afterlife', function (Blueprint $table) {
            $table->id();
            $table->integer('recyclable');
            $table->boolean('fixable');
            $table->boolean('movable');
            $table->boolean('eco_mobilier');
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
        Schema::dropIfExists('afterlife');
    }
}
