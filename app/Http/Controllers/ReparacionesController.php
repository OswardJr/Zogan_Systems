<?php

namespace App\Http\Controllers;

use App\Repuestos;
use Illuminate\Http\Request;
use App\Analistas;
use App\Polizas;
use App\Aseguradoras;
use App\Reparaciones;
use App\Operarios;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ReparacionesController extends Controller
{
    public function index()
    {
      $autos = DB::table('reparaciones')->orderBy('id', 'desc')->paginate(15);

      return view('dashboard', ['autos' => $autos]);
    }

    public function create()
    {
        $aseguradoras = DB::table('aseguradoras')->get();

        $analistas = DB::table('analistas')->get();

        $operarios = DB::table('operarios')->get();

      return view('reparaciones.create', ['aseguradoras' => $aseguradoras, 'analistas' => $analistas, 'operarios' =>$operarios]);
    }

    public function store(Request $request)
    {

        $polizas = new Polizas();
        $polizas->nro_poliza = $request->nro_poliza;
        $polizas = $request->get('one');    
        $polizas->vehiculo_id = $auto;
        $polizas->save();  


        $vehiculos = new Vehiculos();
        $vehiculos->placa = $request->placa;
        $vehiculos->marca = $request->marca;
        $vehiculos->modelo = $request->modelo;
        $vehiculos->tipo = $request->tipo;
        $vehiculos->año = $request->año;
        $vehiculos->color = $request->color;
        $vehiculos->serial_motor = $request->serial_motor;
        $vehiculos->serial_carroceria = $request->serial_carroceria;
        $vehiculos->save();
        $Idvehi = $vehiculos->id;
        $auto = Vehiculo::find($Idvehi);


        $ordenes = new Ordenes();
        $ordenes->rif = $request->rif;
        $ordenes->nombre_completo = $request->nombre_completo;
        $ordenes->fecha_ocurrencia = $request->fecha_ocurrencia;
        $ordenes->nro_certificado = $request->nro_certificado;
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
        $ordenes->manejo_repues = $request->manejo_repues;
        $ordenes->total_manobra = $request->total_manobra;
        $ordenes->deduccion = $request->deduccion;
        $ordenes->desc_prepago = $request->desc_prepago;
        $ordenes->monto = $request->monto;
        $ordenes->iva = $request->iva;
        $ordenes->deducible_p = $request->deducible_p;
        $ordenes->subtotal = $request->subtotal;
        $ordenes->islr = $request->islr;
        $ordenes->total_orden = $request->total_orden;
        $ordenes->ordenes_repues = $request->ordenes_repues;
        $ordenes->repues_otros = $request->repues_otros;
        $ordenes->depreciacion_two = $request->depreciacion_two;
        $ordenes->accesorios = $request->accesorios;    
        $ordenes->depreciacion_nega = $request->depreciacion_nega;
        $ordenes->total_ordenes_acc = $request->total_ordenes_acc;
        $ordenes->monto_final = $request->monto_final;
        $ordenes->save();
        $Idorden = $ordenes->id;


      return redirect('/listcorre')->with('message','El corredor ha sido registrado de manera exitosamente!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
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
