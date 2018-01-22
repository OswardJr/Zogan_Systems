<?php

namespace App\Http\Controllers;

use App\Citas;
use App\Http\Controllers\PermisosController;
use App\Reparaciones;
use App\User;
use Auth;
use PDF;
use Illuminate\Http\Request;
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
              SELECT i.*,e.rif,e.nombre_completo,vehiculos.id,vehiculos.placa,vehiculos.marca,vehiculos.modelo,vehiculos.anio,vehiculos.serial_motor
              FROM citas as i
              inner JOIN propietarios as e
              ON i.propietario_id = e.id
              INNER JOIN vehiculos
              ON i.vehiculo_id = vehiculos.id
              WHERE
              i.act = "ASIGNADA"
              AND
              i.estatus = "activo"');

		$user = User::find(Auth::user()->id);

		$permiso = new PermisosController;
		$permisos = $permiso->permisos(9);
		$permiso->bitacora('Accedió al listado de citas');
		if ($permisos) {
			return view('/listcitas', ['citas' => $citas, 'user' => $user]);
		} else {
			return redirect('/home')->with('message', '¡Acceso no permitido, contacte al administrador!');
		}

	}

    public function me()
    {
      $citas = DB::select('
              SELECT i.*,e.rif,e.nombre_completo,vehiculos.id,vehiculos.placa,vehiculos.marca,vehiculos.modelo,vehiculos.anio,vehiculos.serial_motor
              FROM citas as i
              inner JOIN propietarios as e
              ON i.propietario_id = e.id
              INNER JOIN vehiculos
              ON i.vehiculo_id = vehiculos.id
              WHERE
              i.act = "ASIGNADA"
              AND
              i.estatus = "activo"');
      
		$permiso = new PermisosController;
		$permiso->bitacora('Accedió al listado de citas');


       $user = User::find(Auth::user()->id);    

      return view('/citas', ['citas' => $citas]);
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

		// obtengo el ultimo id
		$id = DB::table('reparaciones')->max('id');
		// digo = si existe el ultimo id sumale 1 , sino muestrame el nro 1
		$id = $id ? $id + 1 : 1;

		$permiso = new PermisosController;
		$permisos = $permiso->permisos(7);

		$permiso = new PermisosController;
		$permiso->bitacora('Accedió a crear una cita');

		if ($permisos) {
			return view('citas/create', ['id' => $id, 'reparaciones' => $reparaciones]);
		} else {
			return redirect('/home')->with('message', '¡Acceso no permitido, contacte al administrador!');
		}
		// load the view and pass the reports
	}

	public function store(Request $request) {

		Validator::make($request->all(), [
			'vehiculo_id' => 'unique:citas',
		],
			[
				'vehiculo_id.unique' => '¡La placa del vehículo ya posee una cita previamente asignada!.',
			]
		)->validate();

		$idusuario = Auth::user()->id;

		$cita = new Citas();
		$cita->reparacion_id = $request->orden_id[0];
		$cita->usuario_id = $idusuario;
		$cita->vehiculo_id = $request->orden_id[0];
		$cita->propietario_id = $request->orden_id[0];
		$cita->selec_dia = $request->fecha;
		$cita->act = 'ASIGNADA';
		$cita->save();

				$permiso = new PermisosController;
		$permiso->bitacora('Registró una cita Orden:' .  $request->orden_id[0] . '');

		return redirect('/citas')->with('message', '¡La cita ha sido guardada programada exitosamente!');
	}

    public function descargar(Request $request){
      $citas = DB::select('
              SELECT i.*,e.rif,e.nombre_completo,vehiculos.id,vehiculos.placa,vehiculos.marca,vehiculos.modelo,vehiculos.anio,vehiculos.serial_motor
              FROM citas as i
              inner JOIN propietarios as e
              ON i.propietario_id = e.id
              INNER JOIN vehiculos
              ON i.vehiculo_id = vehiculos.id
              WHERE
              i.act = "ASIGNADA"
              AND
              i.estatus = "activo"');

        view()->share('citas',$citas);


        if($request->has('download')){
            $pdf = PDF::loadView('citas/citas_pdf');
            return $pdf->stream('Total_Citas.pdf');
        }  
    }

	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	// public function edit($id) {

	// 	    $cita = Citas::findOrFail($id);

	//        $cita = DB::table('citas')
	//            ->where('id', '=', $id)
	//            ->where('act', '=', 'ASIGNADA')
	//            ->update(['act' => 'VENCIDA']);

	//        return redirect()->route('citas.index')->with('message', '¡Cita gestionada exitosamente!');
	// }

	public function update($id) {

	}

	public function destroy($id_)
	{
	$cita = DB::table('citas')
	->where('id_', '=', $id_)
	->where('estatus', '=', 'activo')
	->update(['estatus' => 'inactivo']);

	return redirect('listcitas')->with('message','¡Cita anulada!');
	}

}