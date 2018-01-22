<?php

namespace App\Http\Controllers;
use App\Http\Controllers\PermisosController;

class RespaldosController extends Controller {
	public function index() {

		$permiso = new PermisosController;
		$permiso->bitacora('Accedió al modulo de respaldo');
		return view('respaldo.index');
	}
}
