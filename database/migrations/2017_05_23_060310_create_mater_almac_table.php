<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterAlmacTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mater_almac', function (Blueprint $table) {
            $table->integer('material_id')->unsigned();
            $table->integer('almacen_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('material_id')->references('id')->on('materiales')->onDelete('cascade');
            $table->foreign('almacen_id')->references('id')->on('almacenes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mater_almac');
    }
}
