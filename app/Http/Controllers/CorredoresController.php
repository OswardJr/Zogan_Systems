<?php

namespace App\Http\Controllers;

use App\Corredores;
use App\Aseguradoras;
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
        $aseguradoras = new Aseguradoras();
        $A = Aseguradoras::find($id_Asegu);
        $B = Corredores::find($id_Corre);

        $corredores->cedula = $request->cedula;
        $corredores->nombre = $request->nombre;
        $corredores->apellido = $request->apellido;
        $corredores->celular = $request->celular;
        $corredores->telefono = $request->telefono;
        $corredores->email = $request->email;
        $corredores->status = 'activo';
        $corredores->save();
/*        $aseguradoras->corredor_id = $request->_idCorre;
        $aseguradoras->aseguradora_id = $request->_idAsegu;
        $aseguradoras->save();    
*/
      return redirect('/corredores/create')->with('message','El corredor ha sido guardado exitosamente!');

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
