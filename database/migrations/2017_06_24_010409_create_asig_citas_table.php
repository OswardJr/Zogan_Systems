<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsigCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asig_citas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('selec_dia');
            $table->string('hora');
            $table->integer('orden_id')->unsigned();
            $table->timestamps();            

            $table->foreign('orden_id')->references('id')->on('ordenes')->onDelete('cascade'); 
        Schema::enableForeignKeyConstraints();                                   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asig_citas');
    }
}
