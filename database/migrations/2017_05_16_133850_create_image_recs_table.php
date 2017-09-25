<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageRecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_recs', function (Blueprint $table) {
            $table->integer('imagen_id')->unsigned();
            $table->integer('recepcion_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('imagen_id')->references('id')->on('imagenes')->onDelete('cascade');
            $table->foreign('recepcion_id')->references('id')->on('recepciones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_receps');
    }
}
