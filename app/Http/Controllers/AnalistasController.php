<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnalistasController extends Controller
{

    public function index()
    {
        //
    }

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

    public function destroy($id)
    {
        //
    }
}
