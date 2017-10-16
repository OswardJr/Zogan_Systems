<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepuestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repuestos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 30);
            $table->text('descripcion');
            $table->string('cantidad');
            $table->string('marca', 30);
            $table->string('modelo', 30);
            $table->string('area');
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
        Schema::dropIfExists('repuestos');
    }
}
