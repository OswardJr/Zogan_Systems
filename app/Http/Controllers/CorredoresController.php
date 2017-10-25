<?php

namespace App\Http\Controllers;

use App\Corredores;
use App\Aseguradoras;
use App\Corre_asegu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CorredoresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    private $path = 'corredores';

    private $Corre_asegu = 'Corre_asegu';

    public function index()
    {
      $corredores = DB::table('corredores')->where('status', '=', 'activo')->orderBy('cedula', 'desc')->paginate(15);

      return view('/listcorre', ['corredores' => $corredores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $corredores = DB::table('aseguradoras')->where('status','=','activo')->get();

      return view('corredores/create', ['corredores' => $corredores]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Validator::make($request->all(), [
        'cedula'=> 'required|unique:corredores',
        'nombre' => 'required',
        'apellido' => 'required',
        'celular' => 'required',
        'telefono' => 'required',
        'email' => 'required',
        ])->validate();

        $corredores = new Corredores();
        $corredores->cedula = $request->cedula;
        $corredores->nombre = $request->nombre;
        $corredores->apellido = $request->apellido;
        $corredores->celular = $request->celular;
        $corredores->telefono = $request->telefono;
        $corredores->email = $request->email;
        $corre = $request->get('one');
        $corredores->status = 'activo';
        $corredores->save();
        $Idcorre = $corredores->id;
//QUE ESTUPIDEZ............
        $aseguCorre = new Corre_asegu();
        $aseguCorre->corredor_id = $Idcorre;
        $aseguCorre->aseguradora_id = $corre;
        $aseguCorre->save();

      return redirect('/listcorre')->with('message','El corredor ha sido registrado de manera exitosamente!');
    }

    public function show($id)
    {
      $corredores = Corredores::findOrFail($id);

       foreach ($corredores as $value) {
        $aseguradoras = DB::select('
              SELECT i.aseguradora_id, aseguradoras.denominacion
              FROM corre_asegu as i
              inner JOIN corredores as q
              ON i.corredor_id = q.id
              INNER JOIN aseguradoras
              ON i.aseguradora_id = aseguradoras.id
              WHERE corredor_id = :id', ['id' => $corredores->id]);

        foreach ($aseguradoras as $asegu) {
        }
      }

      $seguros = DB::table('aseguradoras')->get();

        return view($this->path.'.see', ['corredores' => $corredores, 'aseguradoras' => $aseguradoras, 'seguros' => $seguros]);
    }

    public function edit($id)
    {
      $corredores = Corredores::findOrFail($id);

       foreach ($corredores as $value) {
        $aseguradoras = DB::select('
              SELECT i.aseguradora_id, aseguradoras.denominacion
              FROM corre_asegu as i
              inner JOIN corredores as q
              ON i.corredor_id = q.id
              INNER JOIN aseguradoras
              ON i.aseguradora_id = aseguradoras.id
              WHERE corredor_id = :id', ['id' => $corredores->id]);

        foreach ($aseguradoras as $asegu) {
        }
      }

      $seguros = DB::table('aseguradoras')->get();

        return view($this->path.'.edit', ['corredores' => $corredores, 'aseguradoras' => $aseguradoras, 'seguros' => $seguros]);
    }

    public function update(Request $request, $id)
    {
          $corredores = Corredores::findOrFail($id);
          $corredores->cedula = $request->cedula;
          $corredores->nombre = $request->nombre;
          $corredores->apellido = $request->apellido;
          $corredores->celular = $request->celular;
          $corredores->telefono = $request->telefono;
          $corredores->email = $request->email;
          $asegu = $request->get('one');
          $segu = $request->get('one');
          $corredores->status = 'activo';
          $corredores->save();
          $Idcorre = $corredores->id;
//QUE ESTUPIDEZ............


          return redirect()->route('corredores.index');
    }

    public function destroy($id)
    {
        $corre = DB::table('corredores')
            ->where('id', '=', $id)
            ->where('status', '=', 'activo')
            ->update(['status' => 'inactivo']);

        return redirect()->route('corredores.index');
    }
}
