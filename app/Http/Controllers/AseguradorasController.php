<?php

namespace App\Http\Controllers;

use App\Aseguradoras;
use App\Http\Controllers\PermisosController;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use PDF;
use PDF;

class AseguradorasController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}
	private $path = 'aseguradoras';

	public function index() {
		$aseguradoras = DB::table('aseguradoras')->where('status', '=', 'activo')->orderBy('rif', 'desc')->paginate(15);

		$user = User::find(Auth::user()->id);

		$permiso = new PermisosController;
		$permisos = $permiso->permisos(9);
		$permiso->bitacora('Accedió al listado de aseguradoras');
		if ($permisos) {
			return view('/listasegu', ['aseguradoras' => $aseguradoras, 'user' => $user]);
		} else {
			return redirect('/home')->with('message', '¡Acceso no permitido, contacte al administrador!');
		}
	}

	public function me() {
		$aseguradoras = DB::table('aseguradoras')->orderBy('rif', 'desc')->paginate(15);

		$user = User::find(Auth::user()->id);

		$permiso = new PermisosController;
		$permiso->bitacora('Accedió al listado de aseguradoras');

		return view('/asegu', ['aseguradoras' => $aseguradoras, 'user' => $user]);
	}

	public function create() {
		$permiso = new PermisosController;
		$permiso->bitacora('Accedió a registrar una aseguradora');
		return view('aseguradoras/create');
	}

	public function store(Request $request) {
		Validator::make($request->all(), [
			'rif' => 'required|unique:aseguradoras',
			'denominacion' => 'required',
			'telefono' => 'required',
			'email' => 'required',
		])->validate();

		$aseguradoras = new Aseguradoras();
		$aseguradoras->rif = $request->rif;
		$aseguradoras->denominacion = $request->denominacion;
		$aseguradoras->telefono = $request->telefono;
		$aseguradoras->email = $request->email;
		$aseguradoras->status = 'activo';
		$aseguradoras->save();

		$permiso = new PermisosController;
		$permiso->bitacora('Registró una aseguradora Rif: ' . $request->rif . '');

		return redirect('/listasegu')->with('message', '¡La aseguradora ha sido guardada exitosamente!');
	}

	public function show($id) {
		$aseguradoras = Aseguradoras::findOrFail($id);
		return view($this->path . '.see', compact('aseguradoras'));
	}

	public function edit($id) {
		$aseguradoras = Aseguradoras::findOrFail($id);
		return view($this->path . '.edit', compact('aseguradoras'));
	}

	public function update(Request $request, $id) {
		$this->validate($request, [
			'rif' => 'required',
			'denominacion' => 'required',
			'telefono' => 'required',
			'email' => 'required',
		]);

		$aseguradoras = Aseguradoras::findOrFail($id);
		$aseguradoras->rif = $request->rif;
		$aseguradoras->denominacion = $request->denominacion;
		$aseguradoras->telefono = $request->telefono;
		$aseguradoras->email = $request->email;
		$aseguradoras->status = 'activo';

		$aseguradoras->save();

		$permiso = new PermisosController;
		$permiso->bitacora('Actualizó una aseguradora Rif: ' . $request->rif . '');

		return redirect()->route('aseguradoras.index')->with('message', '¡Aseguradora actualizada con éxito!');
	}

	public function descargar(Request $request) {
		$aseguradoras = DB::table("aseguradoras")->get();

		view()->share('aseguradoras', $aseguradoras);

		if ($request->has('download')) {
			$pdf = PDF::loadView('aseguradoras/asegu_pdf');
			return $pdf->stream('Total_Aseguradoras.pdf');
		}
	}

	public function destroy($id) {
		$asegu = DB::table('aseguradoras')
			->where('id', '=', $id)
			->where('status', '=', 'activo')
			->update(['status' => 'inactivo']);

		return redirect()->route('aseguradoras.index')->with('message', '¡Aseguradora eliminada con éxito!');
	}

	//  public function search(Request $request)
	//  {
	//    $return_arr = array();
	//    $asegu_rif = $request->term;
	//    $asegus = DB::table('aseguradoras')
	//    ->select('rif')
	//    ->where('rif', 'like', ''.$asegu_rif.'%')
	//    ->get();

	//    foreach ($asegus as $asegu) {
	//     $return_arr[] = $asegu->rif;
	//   }
	//   return response()->json($return_arr);
	// }

}
