<?php

namespace App\Http\Controllers;

use App\Corredores;
use App\Corre_asegu;
use App\Http\Controllers\PermisosController;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use PDF;

class CorredoresController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}
	private $path = 'corredores';

	private $Corre_asegu = 'Corre_asegu';

	public function index() {

		$corredores = DB::table('corredores')->where('status', '=', 'activo')->orderBy('cedula', 'desc')->paginate(15);

		$user = User::find(Auth::user()->id);

		$permiso = new PermisosController;
		$permiso->bitacora('Accedió al listado de corredores');
		$permisos = $permiso->permisos(9);
		if ($permisos) {
			return view('/listcorre', ['corredores' => $corredores, 'user' => $user]);
		} else {
			return redirect('/home')->with('message', '¡Acceso no permitido, contacte al administrador!');
		}
	}

	public function me() {
		$corredores = DB::table('corredores')->where('status', '=', 'activo')->orderBy('cedula', 'desc')->paginate(15);

		$user = User::find(Auth::user()->id);

		$permiso = new PermisosController;
		$permiso->bitacora('Accedió al listado de corredores');

		return view('/corred', ['corredores' => $corredores]);
	}

	public function create() {
		$corredores = DB::table('aseguradoras')->where('status', '=', 'activo')->get();

		$permiso = new PermisosController;
		$permiso->bitacora('Accedió a crear un nuevo corredor');

		return view('corredores/create', ['corredores' => $corredores]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		Validator::make($request->all(), [
			'cedula' => 'required|unique:corredores',
			'nombre' => 'required',
			'apellido' => 'required',
			'celular' => 'required',
			'telefono' => 'required',
			'email' => 'required',
		])->validate();

		$corredores = new Corredores();
		$corredores->cedula = $request->cedula;
		$corredores->nombre = $request->nombre;
		$corredores->apellido = $request->apellido;
		$corredores->celular = $request->celular;
		$corredores->telefono = $request->telefono;
		$corredores->email = $request->email;
		$corre = $request->get('one');
		$corredores->status = 'activo';
		$corredores->save();
		$Idcorre = $corredores->id;
//QUE ESTUPIDEZ............
		$aseguCorre = new Corre_asegu();
		$aseguCorre->corredor_id = $Idcorre;
		$aseguCorre->aseguradora_id = $corre;
		$aseguCorre->save();

		$permiso = new PermisosController;
		$permiso->bitacora('Registró un corredor Rif: ' . $request->cedula . '');

		return redirect('/listcorre')->with('message', '¡El corredor ha sido guardado exitosamente!');
	}

	public function show($id) {
		$corredores = Corredores::findOrFail($id);

		foreach ($corredores as $value) {
			$aseguradoras = DB::select('
              SELECT i.aseguradora_id, aseguradoras.denominacion
              FROM corre_asegu as i
              inner JOIN corredores as q
              ON i.corredor_id = q.id
              INNER JOIN aseguradoras
              ON i.aseguradora_id = aseguradoras.id
              WHERE corredor_id = :id', ['id' => $corredores->id]);

			foreach ($aseguradoras as $asegu) {
			}
		}

		$seguros = DB::table('aseguradoras')->get();

		return view($this->path . '.see', ['corredores' => $corredores, 'aseguradoras' => $aseguradoras, 'seguros' => $seguros]);
	}

	public function edit($id) {
		$corredores = Corredores::findOrFail($id);

		foreach ($corredores as $value) {
			$aseguradoras = DB::select('
              SELECT i.aseguradora_id, aseguradoras.denominacion
              FROM corre_asegu as i
              inner JOIN corredores as q
              ON i.corredor_id = q.id
              INNER JOIN aseguradoras
              ON i.aseguradora_id = aseguradoras.id
              WHERE corredor_id = :id', ['id' => $corredores->id]);

			foreach ($aseguradoras as $asegu) {
			}
		}

		$seguros = DB::table('aseguradoras')->get();

		return view($this->path . '.edit', ['corredores' => $corredores, 'aseguradoras' => $aseguradoras, 'seguros' => $seguros]);
	}

	public function update(Request $request, $id) {
		$corredores = Corredores::findOrFail($id);
		$corredores->cedula = $request->cedula;
		$corredores->nombre = $request->nombre;
		$corredores->apellido = $request->apellido;
		$corredores->celular = $request->celular;
		$corredores->telefono = $request->telefono;
		$corredores->email = $request->email;
		$asegu = $request->get('one');
		$segu = $request->get('one');
		$corredores->status = 'activo';
		$corredores->save();
		$Idcorre = $corredores->id;

		$permiso = new PermisosController;
		$permiso->bitacora('Actualizó un corredor Rif: ' . $request->cedula . '');

//QUE ESTUPIDEZ............

		return redirect()->route('corredores.index')->with('message', '¡Corredor actualizado exitosamente!');
	}

	public function descargar(Request $request) {
		$corredores = DB::table("corredores")->get();

		view()->share('corredores', $corredores);

		if ($request->has('download')) {
			$pdf = PDF::loadView('corredores/corred_pdf');
			return $pdf->stream('Total_Corredores.pdf');
		}
	}

	public function destroy($id) {
		$corre = DB::table('corredores')
			->where('id', '=', $id)
			->where('status', '=', 'activo')
			->update(['status' => 'inactivo']);

		return redirect()->route('corredores.index')->with('message', '¡Corredor de seguro eliminado exitosamente!');
	}

	public function getCorredor($cedula) {

		$corre = DB::table('corredores')
			->select('id', 'cedula')
			->where('cedula', $cedula)
			->get();

		return response()->json([
			'corre' => $corre,
		]);
	}

	public function on(Request $request) {
		$return_arr = array();
		$correCedula = $request->term;
		$corres = DB::table('corredores')
			->select('cedula')
			->where('cedula', 'like', '' . $correCedula . '%')
			->get();

		foreach ($corres as $corre) {
			$return_arr[] = $corre->cedula;
		}
		return response()->json($return_arr);
	}

}
