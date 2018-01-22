<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Support\Facades\DB;

class PermisosController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}
	public function permisos($modulo) {
		$id = Auth::user()->id;
		$permiso = DB::table('mod_usu')
			->select(DB::raw('count(mod_usu.id) as numero'))
			->join('users', 'mod_usu.id_usu', '=', 'users.id')
			->where('id_usu', '=', $id)
			->where('id_mod', '=', $modulo)
			->first();
		if ($permiso->numero >= 1) {
			return true;
		} elseif ($permiso->numero < 1) {
			return false;
		}
	}
	public function bitacora($accion) {
		$user = User::findOrFail(Auth::user()->id);
		$hora = date("h:i:s");
		$fecha = date("Y-m-d");
		$ip = $this->getRealIP();
		$id_usu = Auth::user()->id;
		$nom_usu = $user->name;
		DB::insert('insert into bitacora (id_usu, nom_usu, fecha, hora, ip, accion) values (?, ?,?,?,?,?)',
			[$id_usu, $nom_usu, $fecha, $hora, $ip, $accion]);
	}

	public function getRealIP() {
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			return $_SERVER['HTTP_CLIENT_IP'];
		}

		if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			return $_SERVER['HTTP_X_FORWARDED_FOR'];
		}

		return $_SERVER['REMOTE_ADDR'];
	}

	public function view() {

		$this->permisos(8);

		$this->bitacora('Accedió a la bitacora');

		return view('bitacora');
	}

	public function bitacorajax() {
		

		$bitacora = DB::select('SELECT nom_usu as nombre, fecha, hora, ip, accion from bitacora order by timestamp desc ');

		$data = array('data' => $bitacora);
		return json_encode($data);
	}

}
