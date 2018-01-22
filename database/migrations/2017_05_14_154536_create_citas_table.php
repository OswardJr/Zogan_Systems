<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->increments('id_');
            $table->integer('reparacion_id')->unsigned();
            $table->integer('usuario_id')->unsigned();            
            $table->integer('vehiculo_id')->unsigned();
            $table->integer('propietario_id')->unsigned();
            $table->date('selec_dia');
            $table->enum('act', ['ASIGNADA', 'VENCIDA']); 
            $table->enum('estatus', ['activo', 'inactivo']);                    
            $table->timestamps();

            $table->foreign('reparacion_id')->references('id')->on('reparaciones')->onDelete('cascade'); 

            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');             

            $table->foreign('vehiculo_id')->references('id')->on('vehiculos'); 

            $table->foreign('propietario_id')->references('id')->on('propietarios');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
}
