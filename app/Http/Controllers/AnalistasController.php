<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnalistasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        return view('/analistas/create');
    }


    public function store(Request $request)
    {
        $analistas = new Analistas();  
        $analistas->cedula = $request->cedula;
        $analistas->nombre = $request->nombre;
        $analistas->apellido = $request->apellido;
        $analistas->celular = $request->celular;
        $analistas->telefono = $request->telefono;
        $analistas->email = $request->email;
        $analistas->status = 'activo';
        $analistas->save();

      return redirect('/analistas/create')->with('message','El analista ha sido registrado de manera exitosamente!');

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
