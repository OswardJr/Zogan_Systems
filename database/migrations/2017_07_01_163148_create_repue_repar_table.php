<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepueReparTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repue_repar', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reparacion_id')->unsigned();
            $table->integer('repuesto_id')->unsigned();                        
            $table->timestamps();

            $table->foreign('reparacion_id')->references('id')->on('reparaciones')->onDelete('cascade');

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
        Schema::dropIfExists('repue_repar');
    }
}
