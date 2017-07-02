<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolizasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polizas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero');
            $table->integer('aseguradora_id')->unsigned();
            $table->integer('vehiculo_id')->unsigned();
            $table->timestamps();

            $table->foreign('aseguradora_id')->references('id')->on('aseguradoras')->onDelete('cascade');

            $table->foreign('vehiculo_id')->references('id')->on('vehiculos')->onDelete('cascade');                        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('polizas');
    }
}
