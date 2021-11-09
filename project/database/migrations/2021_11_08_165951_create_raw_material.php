<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRawMaterial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raw_material', function (Blueprint $table) {
            $table->id();
            $table->integer('sub_assembly_id');
            $table->integer('weight');
            $table->string('material');
            $table->string('origin');
            $table->string('transformation_location');
            $table->string('transportation_means_raw');
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
        Schema::dropIfExists('raw_material');
    }
}