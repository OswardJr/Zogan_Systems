<?php

namespace App\Http\Controllers;

use App\Repuestos;
use Illuminate\Http\Request;
use App\Analistas;
use App\Aseguradoras;
use App\Ordenes;
use App\Operarios;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class OrdenesController extends Controller
{
    public function index()
    {
      $autos = DB::table('ordenes')->orderBy('id', 'desc')->paginate(15);

      return view('dashboard', ['autos' => $autos]);
    }

    public function create()
    {
        $aseguradoras = DB::table('aseguradoras')->get();

        $analistas = DB::table('analistas')->get();

      return view('ordenes.create', ['aseguradoras' => $aseguradoras, 'analistas' => $analistas]);
    }

    public function store(Request $request)
    {
        $ordenes = new Ordenes();  
        $ordenes->rif = $request->rif;
        $ordenes->nombre_completo = $request->nombre_completo;
        $ordenes->fecha_ocurrencia = $request->fecha_ocurrencia;
        $ordenes->nro_certificado = $request->nro_certificado;
        $ordenes->nro_siniestro = $request->nro_siniestro;
        $ordenes->placa = $request->placa;
        $ordenes->marca = $request->marca;
        $ordenes->modelo = $request->modelo;
        $ordenes->tipo = $request->tipo;
        $ordenes->año = $request->año;
        $ordenes->color = $request->color;
        $ordenes->serial_motor = $request->serial_motor;
        $ordenes->serial_carroceria = $request->serial_carroceria;
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
        $ordenes->repues_otros = $request->repues_otros;
        $ordenes->depreciacion_two = $request->depreciacion_two;
        $ordenes->accesorios = $request->accesorios;
      
        $corre = $request->get('one');    

        $ordenes->status = 'activo';
        $ordenes->save();
        $Idcorre = $ordenes->id;
//QUE ESTUPIDEZ............
        $aseguCorre = new Corre_asegu(); 
        $aseguCorre->corredor_id = $Idcorre;
        $aseguCorre->aseguradora_id = $corre;
        $aseguCorre->save();

            $table->string('monto_asegu');
            $table->text('descripcion_daños');
            $table->text('tipos_daños');
            $table->text('observaciones');
            $table->integer('analista_id')->unsigned();
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
