<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAyudantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayudantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cedula', 20);
            $table->text('nombre');
            $table->text('apellido');
            $table->string('telefono', 20);            
            $table->string('email', 30);
            $table->text('direccion');
            $table->enum('status', ['activo', 'inactivo']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
