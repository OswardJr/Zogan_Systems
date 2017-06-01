<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReparacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reparaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vehiculo_id')->unsigned();
            $table->string('aseguradora');
            $table->string('nro_poliza');
            $table->string('certificado_recibo');
            $table->string('nro_siniestro');
            $table->string('mano_obra');
            $table->string('depreciacion');
            $table->string('mecanica_otros');
            $table->string('subtotal_mo');
            $table->string('otros_gastos');
            $table->string('tot_manobra');
            $table->string('deduccion');
            $table->string('desc_prepago');
            $table->string('monto');
            $table->string('iva');
            $table->string('deducible_p');
            $table->string('subtotal');
            $table->string('islr');
            $table->string('montocargo_asegu');
            $table->string('total_orden');
            $table->string('descripcion');
            $table->string('daños');
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
        Schema::dropIfExists('reparaciones');
    }
}
