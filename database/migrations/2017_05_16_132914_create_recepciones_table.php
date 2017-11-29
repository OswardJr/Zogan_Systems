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
            $table->integer('vehiculo_id')->unsigned();
            $table->enum('metodo', ['Aseguradora', 'Particular']);
            $table->string('chofer');
            $table->string('tlf_chofer');
            $table->string('productor');
            $table->string('recibe');
            $table->date('fecha');            
            $table->string('kilometraje');
            $table->string('combustible');                        
            // $table->string('A');
            // $table->string('B');
            // $table->string('C');
            // $table->string('D');
            // $table->string('E');
            // $table->string('F');
            // $table->string('G');
            // $table->string('H');
            // $table->string('I');
            // $table->string('J');
            // $table->string('K');
            // $table->string('L');
            // $table->string('M');
            // $table->string('Ñ');
            // $table->string('O');
            // $table->string('P');
            // $table->string('Q');
            // $table->string('R');
            // $table->string('S');
            // $table->string('T');
            // $table->string('U');
            // $table->string('V');
            // $table->string('W');
            // $table->string('X');
            // $table->string('Y');
            $table->string('observacion');            
            $table->timestamps();

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
        Schema::dropIfExists('recepciones');
    }
}
