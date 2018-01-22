<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use App\Vehiculos;

use App\Http\Controllers\PermisosController;

class VehiculosController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}
	private $path = 'vehiculos';
	private $vehiculos = null;

	public function index() {
		$vehiculos = DB::table('vehiculos')->orderBy('placa', 'desc')->paginate(15);

		$permiso = new PermisosController;
		$permisos = $permiso->permisos(9);
		if ($permisos) {
			return view('/listvehi', ['vehiculos' => $vehiculos]);
		} else {
			return redirect('/home')->with('message', '¡Acceso no permitido, contacte al administrador!');
		}

	}

	public function me() {
		$vehiculos = DB::table('vehiculos')->orderBy('placa', 'desc')->paginate(15);

		$permiso = new PermisosController;
		$permisos = $permiso->permisos(12);
		if ($permisos) {
			return view('home_services', ['vehiculos' => $vehiculos]);
		} else {
			return redirect('/home')->with('message', '¡Acceso no permitido, contacte al administrador!');
		}
	}

    public function mo()
    {
		$vehiculos = DB::table('vehiculos')->orderBy('placa', 'desc')->paginate(15);

      return view('/vehi', ['vehiculos' => $vehiculos]);
    }

    public function descargar(Request $request){
        $vehiculos = DB::table("vehiculos")->get();

        view()->share('vehiculos',$vehiculos);


        if($request->has('download')){
            $pdf = PDF::loadView('vehiculos/vehi_pdf');
            return $pdf->stream('Total_Vehículos.pdf');
        }  
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

		$ordenes = DB::select('SELECT `id`,`fecha_ocu`, `monto_final`, `nro_siniestro`, `num_certificado`, `propietario_id`, `vehiculo_id` from reparaciones where vehiculo_id="' . $auto[0]->id . '"');

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
	public function web(Request $request, $placa) {
		$auto = Vehiculos::where('placa', $placa)->first();

		if (!$auto) {
			// $msj = array('status' => 'error');
			// return $msj;
			abort(404);
		}

		$results = DB::select('SELECT id  FROM revisiones WHERE vehiculo_id  = :id', ['id' => $auto->id]);

		$array = array();
		$desarmado = array();
		$latoneria = array();
		$pintura = array();
		$preparacion = array();
		$pulitura = array();
		$limpieza = array();
		$recepcion = array();

		foreach ($results as $value) {
			$images = DB::select('
        SELECT i.imagen_id, r.tipo,r.fecha, imagenes.nombre
        FROM image_revs as i
        inner JOIN revisiones as r
        ON i.revision_id = r.id
        INNER JOIN imagenes
        ON i.imagen_id = imagenes.id
        WHERE revision_id = :id', ['id' => $value->id]);
			foreach ($images as $image) {
				if ($image->tipo == 'RECEPCION') {
					array_push($recepcion, $image);
				}
				if ($image->tipo == 'DESARMADO') {
					array_push($desarmado, $image);
				} elseif ($image->tipo == 'LATONERIA') {
					array_push($latoneria, $image);
					array_push($pintura, $image);
				} elseif ($image->tipo == 'PREPARACION') {
					array_push($preparacion, $image);
				} elseif ($image->tipo == 'PINTURA') {
				} elseif ($image->tipo == 'PULITURA') {
					array_push($pulitura, $image);
				} elseif ($image->tipo == 'LIMPIEZA') {
					array_push($limpieza, $image);
				}
			}
			$array = array('recepcion' => $recepcion, 'desarmado' => $desarmado, 'latoneria' => $latoneria, 'pintura' => $pintura, 'preparacion' => $preparacion, 'pulitura' => $pulitura, 'limpieza' => $limpieza);
		}
		// if (!$array) {
		//   $msj = array('status' => 'error');
		//   return $msj;
		// }
		return view('vehiculos.buscar', ['data' => $array, 'auto' => $auto]);

	}

/*       public function findRif(Request $req)
{
return $this->propietarios->findByName($req->input('q'));
}
 */
}
