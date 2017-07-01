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
            $table->integer('propietario_id')->unsigned();
            $table->integer('vehiculo_id')->unsigned();
            $table->integer('analista_id')->unsigned();
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
            $table->timestamps();

            $table->foreign('propietario_id')->references('id')->on('propietarios');

            $table->foreign('vehiculo_id')->references('id')->on('vehiculos');

            $table->foreign('analista_id')->references('id')->on('analistas');

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
