<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorreAseguTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corre_asegu', function (Blueprint $table) {
            $table->integer('corredor_id')->unsigned();
            $table->integer('aseguradora_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('corredor_id')->references('id')->on('corredores')->onDelete('cascade');
            $table->foreign('aseguradora_id')->references('id')->on('aseguradoras')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('corre_asegu');
    }
}
