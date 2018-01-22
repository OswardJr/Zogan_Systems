<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PermisosController;
use App\Operarios;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use PDF;

class OperariosController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}
	private $path = 'operarios';

	public function index() {
		$operarios = DB::table('operarios')->where('status', '=', 'activo')->orderBy('cedula', 'desc')->paginate(15);

		$user = User::find(Auth::user()->id);

		$permiso = new PermisosController;
		$permisos = $permiso->permisos(9);
		$permiso->bitacora('Accedió al listado de operarios');
		if ($permisos) {
			return view('/listope', ['operarios' => $operarios, 'user' => $user]);
		} else {
			return redirect('/home')->with('message', '¡Acceso no permitido, contacte al administrador!');
		}
	}

	public function me() {
		$operarios = DB::table('operarios')->where('status', '=', 'activo')->orderBy('cedula', 'desc')->paginate(15);

		$user = User::find(Auth::user()->id);

		$permiso = new PermisosController;
		$permiso->bitacora('Accedió al listado de operarios');

		return view('/ope', ['operarios' => $operarios]);
	}

	public function create() {
		$operarios = DB::table('operarios')->get();

		$permiso = new PermisosController;
		$permiso->bitacora('Accedió a registrar nuevo operario');

		return view('operarios/create', ['operarios' => $operarios]);
	}

	public function store(Request $request) {
		Validator::make($request->all(), [
			'cedula' => 'required|unique:operarios',
			'nombre' => 'required',
			'apellido' => 'required',
			'telefono' => 'required',
			'email' => 'required',
			'tipo' => 'required',
			'direccion' => 'required',
		])->validate();

		$operarios = new Operarios();
		$operarios->cedula = $request->cedula;
		$operarios->nombre = $request->nombre;
		$operarios->apellido = $request->apellido;
		$operarios->telefono = $request->telefono;
		$operarios->email = $request->email;
		$operarios->tipo = $request->tipo;
		$operarios->direccion = $request->direccion;
		$operarios->status = 'activo';
		$operarios->save();

		$permiso = new PermisosController;
		$permiso->bitacora('Registró un operario cedula: ' . $request->cedula . '');

		return redirect('/listope')->with('message', '¡El operario ha sido guardado exitosamente!');

	}

	public function show($id) {
		$operarios = Operarios::findOrFail($id);
		return view($this->path . '.see', compact('operarios'));
	}

	public function edit($id) {
		$operarios = Operarios::findOrFail($id);
		return view($this->path . '.edit', compact('operarios'));
	}

	public function update(Request $request, $id) {
		$this->validate($request, [
			'cedula' => 'required',
			'nombre' => 'required',
			'apellido' => 'required',
			'telefono' => 'required',
			'email' => 'required',
			'tipo' => 'required',
			'direccion' => 'required',
		]);

		$operarios = Operarios::findOrFail($id);
		$operarios->cedula = $request->cedula;
		$operarios->nombre = $request->nombre;
		$operarios->apellido = $request->apellido;
		$operarios->telefono = $request->telefono;
		$operarios->email = $request->email;
		$operarios->tipo = $request->tipo;
		$operarios->direccion = $request->direccion;
		$operarios->status = 'activo';

		$permiso = new PermisosController;
		$permiso->bitacora('Actualizó un operario cedula: ' . $request->cedula . '');

		$operarios->save();
		return redirect()->route('operarios.index')->with('message', '¡Operario actualizado con éxito!');
	}

	public function descargar(Request $request) {
		$operarios = DB::table("operarios")->get();

		view()->share('operarios', $operarios);

		if ($request->has('download')) {
			$pdf = PDF::loadView('operarios/ope_pdf');
			return $pdf->stream('Total_Operarios.pdf');
		}
	}

	public function destroy($id) {
		$ope = DB::table('operarios')
			->where('id', '=', $id)
			->where('status', '=', 'activo')
			->update(['status' => 'inactivo']);

		return redirect()->route('operarios.index')->with('message', '¡Operario eliminado exitosamente!');
	}

	public function getOperario($cedula) {

		$ope = DB::table('operarios')
			->select('id', 'cedula')
			->where('cedula', $cedula)
			->get();

		return response()->json([
			'ope' => $ope,
		]);
	}

	public function on(Request $request) {
		$return_arr = array();
		$opeCedula = $request->term;
		$opes = DB::table('operarios')
			->select('cedula')
			->where('cedula', 'like', '' . $opeCedula . '%')
			->get();

		foreach ($opes as $ope) {
			$return_arr[] = $ope->cedula;
		}
		return response()->json($return_arr);
	}
}
