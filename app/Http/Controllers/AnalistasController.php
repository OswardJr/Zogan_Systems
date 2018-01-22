<?php

namespace App\Http\Controllers;

use App\Analistas; 
use App\Analis_asegu;
use App\Http\Controllers\PermisosController;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use PDF;

class AnalistasController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}

	private $path = 'analistas';

	private $Analis_asegu = 'Analis_asegu';

	public function index() {
		$analistas = DB::table('analistas')->where('status', '=', 'activo')->orderBy('rif', 'desc')->paginate(15);

		$user = User::find(Auth::user()->id);

		$permiso = new PermisosController;
		$permisos = $permiso->permisos(9);
		$permiso->bitacora('Accedió al listado de analistas');
		if ($permisos) {
			return view('/listanalis', ['analistas' => $analistas, 'user' => $user]);
		} else {
			return redirect('/home')->with('message', '¡Acceso no permitido, contacte al administrador!');
		}
	}

	public function me() {
		$analistas = DB::table('analistas')->where('status', '=', 'activo')->orderBy('rif', 'desc')->paginate(15);

		$user = User::find(Auth::user()->id);
		$permiso = new PermisosController;
		$permiso->bitacora('Accedió al listado de analistas');
		return view('/analis', ['analistas' => $analistas]);
	}

	public function create() {
		$analistas = DB::table('aseguradoras')->where('status', '=', 'activo')->get();

		$permiso = new PermisosController;
		$permiso->bitacora('Accedió a registrar nuevo analista');

		return view('analistas/create', ['analistas' => $analistas]);
	}

	public function store(Request $request) {
		Validator::make($request->all(), [
			'rif' => 'required|unique:analistas',
			'nombre' => 'required',
			'apellido' => 'required',
			'celular' => 'required',
			'telefono' => 'required',
			'email' => 'required',
		])->validate();

		$analistas = new Analistas();
		$analistas->rif = $request->rif;
		$analistas->nombre = $request->nombre;
		$analistas->apellido = $request->apellido;
		$analistas->celular = $request->celular;
		$analistas->telefono = $request->telefono;
		$analistas->email = $request->email;
		$anali = $request->get('two');
		$analistas->status = 'activo';
		$analistas->save();
		$Idanalis = $analistas->id;

		$aseguAnalis = new Analis_asegu();
		$aseguAnalis->analista_id = $Idanalis;
		$aseguAnalis->aseguradora_id = $anali;
		$aseguAnalis->save();

		$notification = array(
			'message' => 'Well done.',
			'alert-type' => 'success',
		);

		$permiso = new PermisosController;
		$permiso->bitacora('Registró un analista Rif: ' . $request->rif . '');

		return redirect('/listanalis')->with('message', '¡El analista ha sido guardado exitosamente!');

	}

	public function show($id) {
		$analistas = Analistas::findOrFail($id);

		foreach ($analistas as $value) {
			$aseguradoras = DB::select('
        SELECT i.aseguradora_id, aseguradoras.denominacion
        FROM analis_asegu as i
        inner JOIN analistas as q
        ON i.analista_id = q.id
        INNER JOIN aseguradoras
        ON i.aseguradora_id = aseguradoras.id
        WHERE analista_id = :id', ['id' => $analistas->id]);

			foreach ($aseguradoras as $asegu) {
			}
		}

		$seguros = DB::table('aseguradoras')->get();

		return view($this->path . '.see', ['analistas' => $analistas, 'aseguradoras' => $aseguradoras, 'seguros' => $seguros]);
	}

	public function edit($id) {
		$analistas = Analistas::findOrFail($id);

		foreach ($analistas as $value) {
			$aseguradoras = DB::select('
        SELECT i.aseguradora_id, aseguradoras.denominacion
        FROM analis_asegu as i
        inner JOIN analistas as q
        ON i.analista_id = q.id
        INNER JOIN aseguradoras
        ON i.aseguradora_id = aseguradoras.id
        WHERE analista_id = :id', ['id' => $analistas->id]);

			foreach ($aseguradoras as $asegu) {
			}
		}

		$seguros = DB::table('aseguradoras')->get();

		return view($this->path . '.edit', ['analistas' => $analistas, 'aseguradoras' => $aseguradoras, 'seguros' => $seguros]);
	}

	public function update(Request $request, $id) {
		$analistas = Analistas::findOrFail($id);
		$analistas->rif = $request->rif;
		$analistas->nombre = $request->nombre;
		$analistas->apellido = $request->apellido;
		$analistas->celular = $request->celular;
		$analistas->telefono = $request->telefono;
		$analistas->email = $request->email;
		$anali = $request->get('two');
		$analistas->status = 'activo';
		$analistas->save();
		$Idanalis = $analistas->id;

		$permiso = new PermisosController;
		$permiso->bitacora('Actualizó un analista Rif: ' . $request->rif . '');
		//QUE ESTUPIDEZ............

		return redirect()->route('analistas.index')->with('message', '¡Analista actualizado con éxito!');
	}

	public function destroy($id) {
		$anali = DB::table('analistas')
			->where('id', '=', $id)
			->where('status', '=', 'activo')
			->update(['status' => 'inactivo']);

		$analista = DB::table('analistas')
			->where('id', '=', $id)
			->get();

		$permiso = new PermisosController;
		$permiso->bitacora('Eliminó un analista Rif: ' . $analista[0]->rif . '');

		return redirect()->route('analistas.index')->with('message', '¡Analista eliminado exitosamente!');
	}

	public function descargar(Request $request) {
		$analistas = DB::table("analistas")->get();

		view()->share('analistas', $analistas);

		if ($request->has('download')) {
			$pdf = PDF::loadView('analistas/analis_pdf');
			return $pdf->stream('Total_Analistas.pdf');
		}
	}

	public function getAnalista($rif) {

		$anali = DB::table('analistas')
			->select('id', 'rif')
			->where('rif', $rif)
			->get();

		return response()->json([
			'anali' => $anali,
		]);
	}

	public function on(Request $request) {
		$return_arr = array();
		$analisRif = $request->term;
		$analis = DB::table('analistas')
			->select('rif')
			->where('rif', 'like', '' . $analisRif . '%')
			->get();

		foreach ($analis as $anali) {
			$return_arr[] = $anali->rif;
		}
		return response()->json($return_arr);
	}

}
