<?php

namespace App\Http\Controllers;

use App\Citas;
use App\Reparaciones;
use Illuminate\Http\Request;
use Auth;
use App\Aseguradoras;
use App\Propietarios;
use App\Vehiculos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CitasController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
      $citas = DB::select('
              SELECT i.*,e.rif,e.nombre_completo,vehiculos.placa,vehiculos.marca,vehiculos.modelo,vehiculos.anio,vehiculos.serial_motor
              FROM citas as i
              inner JOIN propietarios as e
              ON i.propietario_id = e.id
              INNER JOIN vehiculos
              ON i.vehiculo_id = vehiculos.id');

      return view('/listcitas', ['citas' => $citas]);
	}
	public function see() {
		$citas = Citas::all();

		// load the view and pass the reports
		//return view('citas/index', ['citas' => $citas]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function create() {
		// get all the reports
		$reparaciones = Reparaciones::all();

		// load the view and pass the reports
		return view('citas/create', ['reparaciones' => $reparaciones]);
	}

	public function store(Request $request) {
		$cita = new Citas();
		$cita->reparacion_id = $request->orden_id[0];
		$cita->vehiculo_id = $request->orden_id[0];
		$cita->propietario_id = $request->orden_id[0];
		$cita->selec_dia = $request->fecha;
		$cita->save();

		return redirect('/citas')->with('message', 'La cita ha sido guardada exitosamente!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
}