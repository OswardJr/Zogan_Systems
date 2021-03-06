<?php

namespace App\Http\Controllers;
use App\Http\Controllers\PermisosController;
use App\Operarios;
use App\Polizas;
use App\Propietarios;
use App\Reparaciones;
use App\User;
use App\Vehiculos;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class ReparacionesController extends Controller {

	// SELECT i.*,e.rif,e.nombre_completo,e.telefono,e.email,vehiculos.placa,vehiculos.marca,vehiculos.modelo,vehiculos.anio,vehiculos.serial_motor,vehiculos.serial_carro,vehiculos.color,vehiculos.tipo,polizas.numero
	// FROM reparaciones as i
	// inner JOIN propietarios as e
	// ON i.propietario_id = e.id
	// INNER JOIN vehiculos
	// ON i.vehiculo_id = vehiculos.id
	// INNER JOIN polizas
	// ON i.poliza_id = polizas.id

	public function __construct() {
		$this->middleware('auth');
	}
	public function index() {
		$autos = DB::select('
              SELECT i.*,i.vehiculo_id,q.status, q.marca,q.modelo,q.placa,propietarios.nombre_completo, z.reparacion_id, z.act, z.estatus
              FROM reparaciones as i
              inner JOIN vehiculos as q
              ON i.vehiculo_id = q.id
              INNER JOIN propietarios
              ON i.propietario_id = propietarios.id
              INNER JOIN citas as z
              ON i.id = z.reparacion_id
              WHERE z.estatus = "activo"
              ');

		return view('dashboard', ['autos' => $autos]);
	}

	public function mo() {
		$reparaciones = DB::select('
              SELECT i.*,q.status, q.marca,q.modelo,q.placa,propietarios.nombre_completo,analistas.nombre
              FROM reparaciones as i
              inner JOIN vehiculos as q
              ON i.vehiculo_id = q.id
              INNER JOIN propietarios
              ON i.propietario_id = propietarios.id
              INNER JOIN analistas
              ON i.analista_id = analistas.id
              ');

		$user = User::find(Auth::user()->id);

		return view('/orden', ['reparaciones' => $reparaciones]);
	}

	public function me() {
		$autos = DB::select('
              SELECT i.vehiculo_id, i.nro_siniestro, q.status, q.marca,q.modelo,q.placa,propietarios.nombre_completo, x.id, x.numero
              FROM reparaciones as i
              inner JOIN vehiculos as q
              ON i.vehiculo_id = q.id
              INNER JOIN propietarios
              ON i.propietario_id = propietarios.id
              inner JOIN polizas as x
              ON i.poliza_id = x.id
              ');
		return view('home_ruta', ['autos' => $autos]);
	}

	public function on() {
		$reparaciones = DB::select('
              SELECT i.*,q.status, q.marca,q.modelo,q.placa,propietarios.nombre_completo,analistas.nombre
              FROM reparaciones as i
              inner JOIN vehiculos as q
              ON i.vehiculo_id = q.id
              INNER JOIN propietarios
              ON i.propietario_id = propietarios.id
              INNER JOIN analistas
              ON i.analista_id = analistas.id
              ORDER by created_at DESC;
              ');

		$permiso = new PermisosController;
		$permisos = $permiso->permisos(9);
		$permiso->bitacora('Accedió al listado de ordenes de reparación');
		if ($permisos) {
			return view('/listorden', ['reparaciones' => $reparaciones]);
		} else {
			return redirect('/home')->with('message', '¡Acceso no permitido, contacte al administrador!');
		}

	}

	public function create() {
		$aseguradoras = DB::table('aseguradoras')->where('status', '=', 'activo')->get();

		$analistas = DB::table('analistas')->where('status', '=', 'activo')->get();

		$latoneros = DB::table('operarios')->where('tipo', '=', 'latonero')->where('status', '=', 'activo')->get();

		$pintores = DB::table('operarios')->where('tipo', '=', 'pintor')->where('status', '=', 'activo')->get();

		// obtengo el ultimo id
		$id = DB::table('reparaciones')->max('id');
		// digo = si existe el ultimo id sumale 1 , sino muestrame el nro 1
		$id = $id ? $id + 1 : 1;

		$permiso = new PermisosController;
		$permisos = $permiso->permisos(2);
		$permiso->bitacora('Accedió a crear una orden de reparación');

		if ($permisos) {
			return view('reparaciones.create', ['id' => $id, 'aseguradoras' => $aseguradoras, 'analistas' => $analistas, 'latoneros' => $latoneros, 'pintores' => $pintores]);

		} else {
			return redirect('/home')->with('message', '¡Acceso no permitido, contacte al administrador!');
		}

	}

	public function store(Request $request) {

		$polizas = new Polizas();
		$polizas->numero = $request->numero;
		$asegu = $request->get('one');
		$polizas->aseguradora_id = $asegu;
		$polizas->save();
		$Idpoli = $polizas->id;

		$propietarios = new Propietarios();
		$propietarios->rif = $request->rif;
		$propietarios->nombre_completo = $request->nombre_completo;
		$propietarios->telefono = $request->telefono;
		$propietarios->email = $request->email;
		$propietarios->save();
		$Idprop = $propietarios->id;

		$idusuario = Auth::user()->id;

		$vehiculos = new Vehiculos();
		$vehiculos->placa = $request->placa;
		$marquita = $request->get('marca');
		$vehiculos->marca = $marquita;
		$vehiculos->modelo = $request->modelo;
		$vehiculos->tipo = $request->tipo;
		$vehiculos->anio = $request->anio;
		$vehiculos->color = $request->color;
		$vehiculos->serial_motor = $request->serial_motor;
		$vehiculos->serial_carro = $request->serial_carro;
		$vehiculos->status = 'NINGUNO';
		$vehiculos->usuario_id = $idusuario;
		$vehiculos->save();
		$Idvehi = $vehiculos->id;

		$ordenes = new Reparaciones();
		$ordenes->fecha_ocu = $request->fecha_ocu;
		$ordenes->num_certificado = $request->num_certificado;
		$ordenes->nro_siniestro = $request->nro_siniestro;
		$ordenes->notas = $request->notas;
		$ordenes->mano_obra = $request->mano_obra;
		$ordenes->depreciacion = $request->depreciacion;
		$ordenes->mecanica_otros = $request->mecanica_otros;
		$ordenes->subtotal_mo = $request->subtotal_mo;
		$ordenes->otros_gastos = $request->otros_gastos;
		$ordenes->tot_manobra = $request->tot_manobra;
		$ordenes->total_repues = $request->total_repues;
		$ordenes->depre_repues = $request->depre_repues;
		$ordenes->total_accesorios = $request->total_accesorios;
		$ordenes->repues_taller = $request->repues_taller;
		$ordenes->depre_acce = $request->depre_acce;
		$ordenes->manejo_repues = $request->manejo_repues;
		$ordenes->deduccion = $request->deduccion;
		$ordenes->desc_prepago = $request->desc_prepago;
		$ordenes->monto = $request->monto;
		$ordenes->iva = $request->iva;
		$ordenes->deducible_p = $request->deducible_p;
		$ordenes->subtotal = $request->subtotal;
		$ordenes->islr = $request->islr;
		$ordenes->monto_asegu = $request->monto_asegu;
		$ordenes->ordenes_repues = $request->ordenes_repues;
		$ordenes->repues_otros = $request->repues_otros;
		$ordenes->depreciacion_two = $request->depreciacion_two;
		$ordenes->accesorios = $request->accesorios;
		$ordenes->depreciacion_nega = $request->depreciacion_nega;
		$ordenes->total_ordenes_acc = $request->total_ordenes_acc;
		$ordenes->monto_final = $request->monto_final;
		$ordenes->descripcion_daños = $request->descripcion_daños;
		$ordenes->tipos_daños = $request->tipos_daños;
		$ordenes->selec_repues = $request->selec_repues;
		$ordenes->no_dispo = $request->no_dispo;
		$ordenes->usuario_id = $idusuario;
		$ordenes->propietario_id = $Idprop;
		$ordenes->vehiculo_id = $Idvehi;
		$ordenes->poliza_id = $Idpoli;
		$analis = $request->get('two');
		$ordenes->analista_id = $analis;
		$lato = $request->get('three');
		$ordenes->latonero_id = $lato;
		$pin = $request->get('fourth');
		$ordenes->pintor_id = $pin;
		$ordenes->save();
		$Idorden = $ordenes->id;

		$permiso = new PermisosController;
		$permiso->bitacora('Registró una nueva orden de reparación  codigo: ' . $ordenes->id . '');

		return redirect('/listorden')->with('message', 'Orden de Reparación guardada de manera exitosamente!');
	}

	public function descargar(Request $request) {
		$reparaciones = DB::select('
              SELECT i.*,q.status, q.marca,q.modelo,q.placa,propietarios.nombre_completo,analistas.nombre
              FROM reparaciones as i
              inner JOIN vehiculos as q
              ON i.vehiculo_id = q.id
              INNER JOIN propietarios
              ON i.propietario_id = propietarios.id
              INNER JOIN analistas
              ON i.analista_id = analistas.id
              ');
		view()->share('reparaciones', $reparaciones);

		if ($request->has('download')) {
			$pdf = PDF::loadView('reparaciones/repara_pdf');
			return $pdf->stream('Total_Órdenes.pdf');
		}
	}

	public function show($id) {
		//
	}

	public function edit($id) {
		//
	}

	public function update(Request $request, $id) {
		//
	}

	public function destroy($id) {
		//
	}

	public function invoice() {
		// $view =  \View::make('pdf.invoice', compact('data', 'date', 'invoice'))->render();

		// $data = $this->getData();
		// $date = date('Y-m-d');
		$view = \View::make('pdf.invoice')->render();

		$pdf = \App::make('dompdf.wrapper');

		$pdf->loadHTML($view);

		return $pdf->download('Orden.pdf');

		// $pdf = PDF::loadView('pdf.invoice')->setWarnings(false);

		// return $pdf->download('invoice.pdf');
	}

	public function getData() {
		$autos = DB::select('
              SELECT i.*,e.rif,e.nombre_completo,e.telefono,e.email,vehiculos.placa,vehiculos.marca,vehiculos.modelo,vehiculos.anio,vehiculos.serial_motor,vehiculos.serial_carro,vehiculos.color,vehiculos.tipo,polizas.numero
              FROM reparaciones as i
              inner JOIN propietarios as e
              ON i.propietario_id = e.id
              INNER JOIN vehiculos
              ON i.vehiculo_id = vehiculos.id
              INNER JOIN polizas
              ON i.poliza_id = polizas.id ');

		return $autos;
	}

	public function downloadPDF($id) {

		$reparaciones = Reparaciones::find($id);
		$reparacione = Vehiculos::find($id);
		$reparacion = Propietarios::find($id);
		$reparacio = Polizas::find($id);
		$reparaci = Operarios::find($id);

		// $reparaciones = DB::select('
		//     SELECT i.*,e.rif,e.nombre_completo,e.telefono,e.email,vehiculos.placa,vehiculos.marca,vehiculos.modelo,vehiculos.anio,vehiculos.serial_motor,vehiculos.serial_carro,vehiculos.color,vehiculos.tipo,polizas.numero
		//     FROM reparaciones as i
		//     inner JOIN propietarios as e
		//     ON i.propietario_id = e.id
		//     INNER JOIN vehiculos
		//     ON i.vehiculo_id = vehiculos.id
		//     INNER JOIN polizas
		//     ON i.poliza_id = polizas.id
		//     WHERE i.id = :id', ['id' => $repar->id]
		//     );

		$pdf = PDF::loadView('htmltopdfview', compact('reparaciones', 'reparacione', 'reparacion', 'reparacio', 'reparaci'));
		return $pdf->stream('orden.pdf');
	}

	public function downloadruta($id) {

		$reparaciones = Reparaciones::find($id);
		$reparacione = Vehiculos::find($id);
		$reparacion = Propietarios::find($id);
		$reparacio = Polizas::find($id);
		
		$reparaci = Operarios::find($id);

		// $reparaciones = DB::select('
		//     SELECT i.*,e.rif,e.nombre_completo,e.telefono,e.email,vehiculos.placa,vehiculos.marca,vehiculos.modelo,vehiculos.anio,vehiculos.serial_motor,vehiculos.serial_carro,vehiculos.color,vehiculos.tipo,polizas.numero
		//     FROM reparaciones as i
		//     inner JOIN propietarios as e
		//     ON i.propietario_id = e.id
		//     INNER JOIN vehiculos
		//     ON i.vehiculo_id = vehiculos.id
		//     INNER JOIN polizas
		//     ON i.poliza_id = polizas.id
		//     WHERE i.id = :id', ['id' => $repar->id]
		//     );

		$pdf = PDF::loadView('pdf_ruta', compact('reparaciones', 'reparacione', 'reparacion', 'reparacio', 'reparaci'));
		return $pdf->stream('Credencial.pdf');
	}

	/*public function autoComplete(Request $request) {
		            $query = $request->get('term','');

		            $repuestos=Repuestos::where('codigo','LIKE','%'.$query.'%')->get();

		            $data=array();
		            foreach ($repuestos as $repuesto) {
		                    $data[]=array('value'=>$repuestos->codigo,'id'=>$repuestos->id);
		            }
		            if(count($data))
		                 return $data;
		            else
		                return ['value'=>'No Result Found','id'=>''];

		    }

		     <script>
		   $(document).ready(function() {
		    src = "{{ route('searchajax') }}";
		     $("#search_text").autocomplete({
		        source: function(request, response) {
		            $.ajax({
		                url: src,
		                dataType: "json",
		                data: {
		                    term : request.term
		                },
		                success: function(data) {
		                    response(data);

		                }
		            });
		        },
		        minLength: 3,

		    });
		});
		</script>
	*/
}
