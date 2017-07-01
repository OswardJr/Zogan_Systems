<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReparOpeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repar_ope', function (Blueprint $table) {
            $table->integer('reparacion_id')->unsigned();
            $table->integer('operario_id')->unsigned();                 
            $table->timestamps();

            $table->foreign('reparacion_id')->references('id')->on('reparaciones')->onDelete('cascade');

            $table->foreign('operario_id')->references('id')->on('operarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repar_ope');
    }
}
