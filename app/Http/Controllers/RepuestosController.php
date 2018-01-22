<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PermisosController;
use App\Repuestos;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use PDF;

class RepuestosController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}

	private $path = 'repuestos';

	public function index() {
		$repuestos = DB::table('repuestos')->where('status', '=', 'activo')->orderBy('codigo', 'desc')->paginate(15);

		$user = User::find(Auth::user()->id);

		$permiso = new PermisosController;
		$permisos = $permiso->permisos(9);
		$permiso->bitacora('Accedió al listado de repuestos');
		if ($permisos) {
			return view('/listrepuesto', ['repuestos' => $repuestos, 'user' => $user]);
		} else {
			return redirect('/home')->with('message', '¡Acceso no permitido, contacte al administrador!');
		}

	}

	public function mo() {
		$repuestos = DB::table('repuestos')->where('status', '=', 'activo')->orderBy('codigo', 'desc')->paginate(15);

		$user = User::find(Auth::user()->id);

		$permiso = new PermisosController;

		$permiso->bitacora('Accedió al listado de repuestos');

		return view('/repuestos', ['repuestos' => $repuestos]);
	}

	public function create() {
		$repuestos = DB::table('areas')->get();

		$permiso = new PermisosController;
		$permisos = $permiso->permisos(4);
		if ($permisos) {
			return view('repuestos/create', ['repuestos' => $repuestos]);
		} else {
			return redirect('/home')->with('message', '¡Acceso no permitido, contacte al administrador!');
		}

	}

	public function store(Request $request) {
		Validator::make($request->all(), [
			'codigo' => 'required|unique:repuestos',
			'descripcion' => 'required',
			'cantidad' => 'required',
			'marca' => 'required',
			'modelo' => 'required',
		])->validate();

		$repuestos = new Repuestos();
		$repuestos->codigo = $request->codigo;
		$repuestos->descripcion = $request->descripcion;
		$repuestos->cantidad = $request->cantidad;
		$repuestos->marca = $request->marca;
		$repuestos->modelo = $request->modelo;
		$repu = $request->get('one');
		$repuestos->area = $repu;
		$repuestos->status = 'activo';
		$repuestos->save();

		$permiso = new PermisosController;
		$permiso->bitacora('Registró un repuesto codigo: ' . $request->codigo . '');

		return redirect('/listrepuesto')->with('message', '¡El repuesto ha sido guardado exitosamente!');
	}

	public function show($id) {
		$repuestos = Repuestos::findOrFail($id);
		return view($this->path . '.see', compact('repuestos'));
	}

	public function edit($id) {
		$repuestos = DB::table('areas')->get();

		$repuestos = Repuestos::findOrFail($id);
		return view($this->path . '.edit', compact('repuestos'));
	}

	public function update(Request $request, $id) {
		$this->validate($request, [
			'codigo' => 'required',
			'descripcion' => 'required',
			'cantidad' => 'required',
			'marca' => 'required',
			'modelo' => 'required',
		]);

		$repuestos = Repuestos::findOrFail($id);
		$repuestos->codigo = $request->codigo;
		$repuestos->descripcion = $request->descripcion;
		$repuestos->cantidad = $request->cantidad;
		$repuestos->marca = $request->marca;
		$repuestos->modelo = $request->modelo;
		$repuestos->status = 'activo';
		$repuestos->save();

		return redirect('/listrepuesto')->with('message', '¡Repuesto actualizado con éxito!');
	}

	public function descargar(Request $request) {
		$repuestos = DB::table("repuestos")->get();

		view()->share('repuestos', $repuestos);

		if ($request->has('download')) {
			$pdf = PDF::loadView('repuestos/repuestos_pdf');
			return $pdf->stream('Total_Repuestos.pdf');
		}
	}

	public function destroy($id) {
		$reps = DB::table('repuestos')
			->where('id', '=', $id)
			->where('status', '=', 'activo')
			->update(['status' => 'inactivo']);

		return redirect()->route('repuestos.index')->with('message', '¡Repuesto eliminado exitosamente!');
	}
}
