<?php

namespace App\Http\Controllers;

use Aseguradoras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class VehiculosController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}
	private $path = 'vehiculos';
	private $vehiculos = null;

	public function index() {
		$vehiculos = DB::table('vehiculos')->orderBy('placa', 'desc')->paginate(15);

		return view('/listvehi', ['vehiculos' => $vehiculos]);
	}

	public function me() {
		$vehiculos = DB::table('vehiculos')->orderBy('placa', 'desc')->paginate(15);

		return view('home_services', ['vehiculos' => $vehiculos]);
	}
	public function create() {
		return view('vehiculos/create');
	}

	public function store(Request $request) {
		$vehiculos = new Vehiculos();
		$vehiculos->placa = $request->placa;
		$vehiculos->marca = $request->marca;
		$vehiculos->modelo = $request->modelo;
		$vehiculos->anio = $request->anio;
		$vehiculos->serial_motor = $request->serial_motor;
		$vehiculos->serial_carro = $request->serial_carro;
		$vehiculos->color = $request->color;
		$vehiculos->tipo = $request->tipo;
		$vehiculos->status = 'activo';
		$vehiculos->save();

		return redirect('/listvehi')->with('message', 'El vehiculo ha sido guardado exitosamente!');
	}

	public function getVehiculo($placa) {

		$auto = DB::table('vehiculos')
			->select('id', 'placa', 'marca', 'modelo', 'serial_motor', 'serial_carro')
			->where('placa', $placa)
			->get();

		$ordenes = DB::select('SELECT `id`,`fecha_ocu`, `subtotal`, `nro_siniestro`, `num_certificado`, `propietario_id`, `vehiculo_id` from reparaciones where vehiculo_id="' . $auto[0]->id . '"');

		return response()->json([
			'auto' => $auto,
			'ordenes' => $ordenes,
		]);
	}

	public function show(Request $request) {
		$return_arr = array();
		$autoPlaca = $request->term;
		$autos = DB::table('vehiculos')
			->select('placa')
			->where('placa', 'like', '' . $autoPlaca . '%')
			->get();

		foreach ($autos as $auto) {
			$return_arr[] = $auto->placa;
		}
		return response()->json($return_arr);
	}

public function getAseguradora($rif) {

		$asegu = DB::table('aseguradoras')
			->select('id', 'rif', 'denominacion', 'telefono')
			->where('rif', $rif)
			->get();

		return response()->json([
			'asegu' => $asegu,
		]);
	}

	public function edit(Request $request) {
		$return_arr = array();
		$aseguRif = $request->term;
		$asegus = DB::table('aseguradoras')
			->select('rif')
			->where('rif', 'like', '' . $aseguRif . '%')
			->get();

		foreach ($asegus as $asegu) {
			$return_arr[] = $asegu->rif;
		}
		return response()->json($return_arr);
	}

	public function update(Request $request, $id) {
		//
	}

	public function destroy($id) {
		//
	}

/*       public function findRif(Request $req)
{
return $this->propietarios->findByName($req->input('q'));
}
 */
}
