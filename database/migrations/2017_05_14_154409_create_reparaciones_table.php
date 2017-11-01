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
            $table->integer('usuario_id')->unsigned();
            $table->integer('propietario_id')->unsigned();
            $table->integer('vehiculo_id')->unsigned();
            $table->integer('poliza_id')->unsigned();
            $table->integer('analista_id')->unsigned();
            $table->integer('latonero_id')->unsigned();
            $table->integer('pintor_id')->unsigned();
            $table->string('fecha_ocu');
            $table->string('num_certificado');
            $table->string('nro_siniestro');
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
            $table->string('deduccion');
            $table->string('desc_prepago');
            $table->string('monto');
            $table->string('iva');
            $table->string('deducible_p');
            $table->string('subtotal');
            $table->string('islr');
            $table->string('ordenes_repues');
            $table->string('repues_otros');
            $table->string('depreciacion_two');
            $table->string('accesorios');
            $table->string('depreciacion_nega');
            $table->string('total_ordenes_acc');
            $table->string('monto_asegu');
            $table->string('monto_final');
            $table->text('descripcion_daños');
            $table->text('tipos_daños');
            $table->text('selec_repues');
            $table->text('no_dispo');
            $table->timestamps();

            $table->foreign('propietario_id')->references('id')->on('propietarios');

            $table->foreign('vehiculo_id')->references('id')->on('vehiculos');

            $table->foreign('analista_id')->references('id')->on('analistas');

            $table->foreign('latonero_id')->references('id')->on('operarios');

            $table->foreign('pintor_id')->references('id')->on('operarios');

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
        Schema::dropIfExists('reparaciones');
    }
}
