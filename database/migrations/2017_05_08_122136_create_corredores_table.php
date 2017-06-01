<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorredoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corredores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cedula', 20);
            $table->text('nombre');
            $table->text('apellido');
            $table->string('celular', 20);
            $table->string('telefono', 20);
            $table->string('email', 30);            
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
        Schema::dropIfExists('corredores');
    }
}
