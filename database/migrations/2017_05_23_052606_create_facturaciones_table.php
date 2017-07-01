<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reparacion_id')->unsigned();            
            $table->text('descripcion');
            $table->enum('forma_pago',['efectivo','deposito / transferencia']);
            $table->string('nro_cuenta');
            $table->string('nro_comprobante');
            $table->string('impuesto');
            $table->string('subtot');
            $table->string('total');
            $table->enum('status',['activo','inactivo']);            
            $table->timestamps();

            $table->foreign('reparacion_id')->references('id')->on('reparaciones')->onDelete('cascade');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturaciones');
    }
}
