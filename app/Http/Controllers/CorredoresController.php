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
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $corredores = DB::table('aseguradoras')->get();

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
        $corredores = new Corredores();  
        $corredores->cedula = $request->cedula;
        $corredores->nombre = $request->nombre;
        $corredores->apellido = $request->apellido;
        $corredores->celular = $request->celular;
        $corredores->telefono = $request->telefono;
        $corredores->email = $request->email;
        $corredores->status = 'activo';
        $corredores->save();
        $Idcorre = $corredores->id;

        $asegu = new Aseguradoras();  
        $aseguCorre = new Corre_asegu();  
        $aseguId = $asegu->id;
        $aseguCorre->corredor_id = $aseguId;
        $aseguCorre->aseguradora_id = $Idcorre;
        $aseguCorre->save();

      return redirect('/corredores/create')->with('message','El corredor ha sido registrado de manera exitosamente!');
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
