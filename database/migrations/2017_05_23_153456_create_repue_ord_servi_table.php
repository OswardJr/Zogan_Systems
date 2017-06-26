<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepueOrdServiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repue_ord_servi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('orden_servicio_id')->unsigned();
            $table->integer('repuesto_id')->unsigned();                        
            $table->timestamps();

            $table->foreign('orden_servicio_id')->references('id')->on('orden_servicios')->onDelete('cascade');

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
        Schema::dropIfExists('repue_ord_servi');
    }
}
