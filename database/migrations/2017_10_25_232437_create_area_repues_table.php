<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaRepuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_repues', function (Blueprint $table) {
            $table->integer('area_id')->unsigned();
            $table->integer('repuesto_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
            $table->foreign('repuesto_id')->references('id')->on('repuestos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('area_repues');
    }
}
