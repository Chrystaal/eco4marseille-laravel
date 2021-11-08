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
            $table->integer('sub_assembly_id');
            $table->string('transportation_means_assembly');
            $table->string('energy');
            $table->string('loss_rate');
            $table->string('assembly_location');
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
        Schema::dropIfExists('assembly');
    }
}
