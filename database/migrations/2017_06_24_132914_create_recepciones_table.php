<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecepcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recepciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cita_id')->unsigned();
            $table->enum('tipo', ['aseguradora', 'particular']);
            $table->string('chofer');
            $table->string('tlf_chofer');
            $table->string('productor');
            $table->string('recibe');
            $table->date('fecha');            
            $table->string('kilometraje');
            $table->string('combustible');
            $table->string('detalles');
            $table->string('observacion');            
            $table->timestamps();

            $table->foreign('cita_id')->references('id')->on('asig_citas')->onDelete('cascade');

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
        Schema::dropIfExists('recepciones');
    }
}
