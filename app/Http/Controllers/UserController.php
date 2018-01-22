<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PermisosController;
use App\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}

	private $path = 'usuarios';

	public function index() {
		$usuarios = DB::table('users')->where('status', '=', 'activo')->orderBy('id', 'desc')->paginate(15);

		$permiso = new PermisosController;
		$permisos = $permiso->permisos(11);
		$permiso->bitacora('Accedió al listado de usuarios');

		if ($permisos) {
			return view('/listusers', ['usuarios' => $usuarios]);
		} else {
			return redirect('/home')->with('message', '¡Acceso no permitido, contacte al administrador!');
		}
	}

	public function create() {
		$modulos = DB::select('select * from modulos');

		$permiso = new PermisosController;
		$permisos = $permiso->permisos(11);
		$permiso->bitacora('Accedió a crear un usuario');
		if ($permisos) {
			return view('usuarios/create', ['modulos' => $modulos]);
		} else {
			return redirect('/home')->with('message', '¡Acceso no permitido, contacte al administrador!');
		}
	}
	public function seguridad() {
		$usuarios = User::findOrFail(Auth::user()->id);

		return view('usuarios/seguridad', ['usuarios' => $usuarios]);
	}
	public function cambio_clave(Request $request) {

	    $user = User::findOrFail(Auth::user()->id);

		if (Hash::check(Input::get('password'), $user->password)) {
			return redirect('/seguridad')->with('vieja', '¡Contraseña incorrecta!');
		}

		Validator::make($request->all(), [
			'password' => 'required|string|min:6|confirmed',
		])->validate();

		$usuarios = User::findOrFail(Auth::user()->id);
		$usuarios->password = Hash::make(Input::get('password'));
		$usuarios->status = 'activo';
		$usuarios->save();

		$permiso = new PermisosController;

		$permiso->bitacora('Cambió su clave');

		return redirect('/seguridad')->with('message', '¡Contraseña guardada exitosamente!');
	}
	public function respaldo() {
		$permiso = new PermisosController;
		$permisos = $permiso->permisos(1);
		$permiso->bitacora('Accedió al modulo de respaldo');
		if ($permisos) {
			return view('usuarios/respaldo');
		} else {
			return redirect('/home')->with('message', '¡Acceso no permitido, contacte al administrador!');
		}
	}

	public function store(Request $request) {

		Validator::make($request->all(), [
			'name' => 'required|string|max:255',
			'email' => 'required|string|email|max:255|unique:users',
			'password' => 'required|string|min:6|confirmed',
		])->validate();

		$usuarios = new User();
		$usuarios->name = $request->name;
		$usuarios->email = $request->email;
		$usuarios->password = Hash::make(Input::get('password'));
		$usuarios->status = 'activo';
		$usuarios->save();

		$InsertId = $usuarios->id;

		$input = $request->all();

		$modulos = $input['modulos'];

		foreach ($modulos as $mod) {
			DB::insert('insert into mod_usu (id_usu, id_mod) values (?, ?)', [$InsertId, $mod]);
		}

		$permiso = new PermisosController;
		$permiso->bitacora('Registró un nuevo usuario');

		return redirect('/listusers')->with('message', '¡El usuario ha sido guardado exitosamente!');
	}

	public function edit($id) {
		//  $userid = Auth::user()->id;

		$modulos = DB::select('SELECT * from modulos ');

		$checkeados = DB::select('SELECT modulos.id as id FROM `mod_usu` INNER JOIN modulos, users where modulos.id = mod_usu.id_mod and users.id = mod_usu.id_usu and id_usu = ?', [$id]);

		$checked = array();

		foreach ($checkeados as $key) {
			array_push($checked, $key->id);
		}

		$usuarios = User::findOrFail($id);

		$permiso = new PermisosController;
		$permisos = $permiso->permisos(11);
		
		if ($permisos) {
			return view($this->path . '.edit', compact('usuarios', 'modulos'), ['checked' => $checked]);
		} else {
			return redirect('/home')->with('message', '¡Acceso no permitido, contacte al administrador!');
		}
	}

	public function show($id) {
		$modulos = DB::select('SELECT * from modulos ');

		$checkeados = DB::select('SELECT modulos.id as id FROM `mod_usu` INNER JOIN modulos, users where modulos.id = mod_usu.id_mod and users.id = mod_usu.id_usu and id_usu = ?', [$id]);

		$checked = array();

		foreach ($checkeados as $key) {
			array_push($checked, $key->id);
		}

		$usuarios = User::findOrFail($id);
		return view($this->path . '.see', compact('usuarios', 'modulos'), ['checked' => $checked]);
	}

	public function update(Request $request, $id) {
		Validator::make($request->all(), [
			'name' => 'required|string|max:255',
			'email' => 'required|string|email|max:255',
		])->validate();

		$usuarios = User::findOrFail($id);
		$usuarios->name = $request->name;
		$usuarios->email = $request->email;
		$usuarios->password = Hash::make(Input::get('password'));
		$usuarios->status = 'activo';
		$usuarios->save();

		$input = $request->all();

		$modulos = $input['modulos'];

		DB::delete('delete from mod_usu where id_usu = ?', [$id]);

		foreach ($modulos as $mod) {
			DB::insert('insert into mod_usu (id_usu, id_mod) values (?, ?)', [$id, $mod]);
		}

		return redirect()->route('usuarios.index')->with('message', '¡Usuario actualizado con éxito!');
	}

	public function destroy($id) {
		$users = DB::table('users')
			->where('id', '=', $id)
			->where('status', '=', 'activo')
			->update(['status' => 'inactivo']);

		return redirect()->route('usuarios.index')->with('message', '¡Usuario eliminado exitosamente!');
	}
}
