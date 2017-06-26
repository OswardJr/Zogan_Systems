<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rif', 20);
            $table->string('nombre_completo');
            $table->string('fecha_ocurrencia');
            $table->string('nro_certificado');
            $table->string('nro_siniestro');
            $table->string('placa')->unique();
            $table->string('marca');
            $table->string('modelo');
            $table->string('tipo');
            $table->string('año');
            $table->string('color');
            $table->string('serial_motor');
            $table->string('serial_carroceria');
            $table->string('notas');
            $table->string('mano_obra');
            $table->string('depreciacion');
            $table->string('mecanica_otros');
            $table->string('subtotal_mo');
            $table->string('otros_gastos');
            $table->string('tot_manobra');
            $table->string('total_repues');
            $table->string('depre_repues');
            $table->string('total_accesorios');
            $table->string('depre_acce');
            $table->string('repues_taller');
            $table->string('manejo_repues');
            $table->string('total_manobra');
            $table->string('deduccion');
            $table->string('desc_prepago');
            $table->string('monto');
            $table->string('iva');
            $table->string('deducible_p');
            $table->string('subtotal');
            $table->string('islr');
            $table->string('total_orden');
            $table->string('ordenes_repues');
            $table->string('repues_otros');
            $table->string('depreciacion_two');
            $table->string('accesorios');
            $table->string('depreciacion_nega');
            $table->string('total_ordenes_acc');
            $table->string('monto_asegu');
            $table->text('descripcion_daños');
            $table->text('tipos_daños');
            $table->text('observaciones');
            $table->integer('analista_id')->unsigned();
            $table->timestamps();

            $table->foreign('analista_id')->references('id')->on('analistas')->onDelete('cascade');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordenes');
    }
}
