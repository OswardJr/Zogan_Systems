<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiales', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descripcion');
            $table->string('cantidad');
            $table->string('marca', 30);
            $table->string('modelo', 30);
            $table->string('costo', 20);
            $table->enum('categoria', ['pintura','latoneria']);
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
        Schema::dropIfExists('materiales');
    }
}
