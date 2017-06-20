<?php

namespace App\Http\Controllers;

use App\Repuestos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RepuestosController extends Controller
{

    private $path = 'repuestos';

    public function index()
    {
      $repuestos = DB::table('repuestos')->orderBy('codigo', 'desc')->paginate(15);

      return view('/listrepuesto', ['repuestos' => $repuestos]);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('repuestos/create');
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
        'codigo'=> 'required',
        'descripcion' => 'required',       
        'cantidad' => 'required',
        'marca' => 'required',
        'modelo' => 'required',
        'costo' => 'required',
        ])->validate();

        $repuestos = new Repuestos();
        $repuestos->codigo = $request->codigo;
        $repuestos->descripcion = $request->descripcion;
        $repuestos->cantidad = $request->cantidad;
        $repuestos->marca = $request->marca;
        $repuestos->modelo = $request->modelo;
        $repuestos->costo = $request->costo;
        $repuestos->status = 'activo';
        $repuestos->save();

      return redirect('/listrepuesto')->with('message','El repuesto ha sido registrado de manera exitosamente!');
    }

    public function show($id)
    {
        $repuestos = Repuestos::findOrFail($id);
        return view($this->path.'.see', compact('repuestos'));
    }

    public function edit($id)
    {
      $repuestos = Repuestos::findOrFail($id);
        return view($this->path.'.edit', compact('repuestos')); 
    }


    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'codigo'=> 'required',
        'descripcion' => 'required',
        'cantidad' => 'required',
        'marca' => 'required',
        'modelo' => 'required',
        'costo' => 'required',
        ]);

          $repuestos = Repuestos::findOrFail($id);
          $repuestos->codigo = $request->codigo;
          $repuestos->descripcion = $request->descripcion;
          $repuestos->cantidad = $request->cantidad;
          $repuestos->marca = $request->marca;
          $repuestos->modelo = $request->modelo;
          $repuestos->costo = $request->costo;
          $repuestos->status = 'activo';
          $repuestos->save();

          return redirect()->route('repuestos.index');
    }

    public function destroy($id)
    {
        //
    }
}
