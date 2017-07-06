<?php

namespace App\Http\Controllers;

use App\Analistas;
use App\Aseguradoras;
use App\Analis_asegu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AnalistasController extends Controller
{

    private $path = 'analistas';

    private $Analis_asegu = 'Analis_asegu';

    public function index()
    {
      $analistas = DB::table('analistas')->orderBy('rif', 'desc')->paginate(15);

      return view('/listanalis', ['analistas' => $analistas]);
    }

    public function create()
    {
      $analistas = DB::table('aseguradoras')->get();

      return view('analistas/create', ['analistas' => $analistas]);
    }


    public function store(Request $request)
    {
        $analistas = new Analistas();  
        $analistas->rif = $request->rif;
        $analistas->nombre = $request->nombre;
        $analistas->apellido = $request->apellido;
        $analistas->celular = $request->celular;
        $analistas->telefono = $request->telefono;
        $analistas->email = $request->email;
        $anali = $request->get('two');        
        $analistas->status = 'activo';
        $analistas->save();        
        $Idanalis = $analistas->id;

        $aseguAnalis = new Analis_asegu(); 
        $aseguAnalis->analista_id = $Idanalis;
        $aseguAnalis->aseguradora_id = $anali;
        $aseguAnalis->save();

      return redirect('/listanalis')->with('message','El analista ha sido registrado de manera exitosamente!');

    }

    public function show($id)
    {
      $analistas = Analistas::findOrFail($id);

       foreach ($analistas as $value) {
        $aseguradoras = DB::select('
              SELECT i.aseguradora_id, aseguradoras.denominacion 
              FROM analis_asegu as i 
              inner JOIN analistas as q 
              ON i.analista_id = q.id 
              INNER JOIN aseguradoras 
              ON i.aseguradora_id = aseguradoras.id 
              WHERE analista_id = :id', ['id' => $analistas->id]);

        foreach ($aseguradoras as $asegu) {
        }            
      }

      $seguros = DB::table('aseguradoras')->get();

        return view($this->path.'.see', ['analistas' => $analistas, 'aseguradoras' => $aseguradoras, 'seguros' => $seguros]);
    }

    public function edit($id)
    {
      $analistas = Analistas::findOrFail($id);

       foreach ($analistas as $value) {
        $aseguradoras = DB::select('
              SELECT i.aseguradora_id, aseguradoras.denominacion 
              FROM analis_asegu as i 
              inner JOIN analistas as q 
              ON i.analista_id = q.id 
              INNER JOIN aseguradoras 
              ON i.aseguradora_id = aseguradoras.id 
              WHERE analista_id = :id', ['id' => $analistas->id]);

        foreach ($aseguradoras as $asegu) {
        }            
      }

      $seguros = DB::table('aseguradoras')->get();

        return view($this->path.'.edit', ['analistas' => $analistas, 'aseguradoras' => $aseguradoras, 'seguros' => $seguros]); 
    }

    public function update(Request $request, $id)
    {
          $analistas = Analistas::findOrFail($id);
          $analistas->rif = $request->rif;
          $analistas->nombre = $request->nombre;
          $analistas->apellido = $request->apellido;
          $analistas->celular = $request->celular;
          $analistas->telefono = $request->telefono;
          $analistas->email = $request->email;
          $anali = $request->get('two'); 
          $analistas->status = 'activo';
          $analistas->save();
          $Idanalis = $analistas->id;
//QUE ESTUPIDEZ............
   

          return redirect()->route('analistas.index');
    }

    public function destroy($id)
    {
        $anali = DB::table('analistas')
            ->where('id', '=', $id)
            ->where('status', '=', 'activo')
            ->update(['status' => 'inactivo']);

        return redirect()->route('analistas.index');
    }
}