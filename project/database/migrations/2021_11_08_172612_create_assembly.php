<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssembly extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assembly', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sub_assembly_id');
            $table->string('transportation_means_assembly');
            $table->string('energy');
            $table->string('loss_rate');
            $table->string('assembly_location');
            $table->timestamps();

            $table->foreign('sub_assembly_id')->references('id')->on('sub_assembly');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assembly');
    }
}
