<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalisAseguTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analis_asegu', function (Blueprint $table) {
            $table->integer('analista_id')->unsigned();
            $table->integer('aseguradora_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('analista_id')->references('id')->on('analistas')->onDelete('cascade');
            $table->foreign('aseguradora_id')->references('id')->on('aseguradoras')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('analis_asegu');
    }
}
