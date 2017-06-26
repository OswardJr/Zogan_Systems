<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServOrdenServTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serv_orden_serv', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('orden_servicio_id')->unsigned();            
            $table->integer('servicio_id')->unsigned();            
            $table->timestamps();

            $table->foreign('orden_servicio_id')->references('id')->on('orden_servicios')->onDelete('cascade');

            $table->foreign('servicio_id')->references('id')->on('servicios')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('serv_orden_serv');
    }
}
