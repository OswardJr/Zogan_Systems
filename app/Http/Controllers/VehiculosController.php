<?php

namespace App\Http\Controllers;

use App\Propietarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class VehiculosController extends Controller
{    
    private $path = 'vehiculos';    
    private $vehiculos = null;

    public function index()
    {
      $vehiculos = DB::table('vehiculos')->orderBy('placa', 'desc')->paginate(15);

      return view('/listvehi', ['vehiculos' => $vehiculos]);        
    }

    public function me()
    {
      $vehiculos = DB::table('vehiculos')->orderBy('placa', 'desc')->paginate(15);

      return view('home_services', ['vehiculos' => $vehiculos]);  
    }
    public function create()
    {
        return view('vehiculos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehiculos = new Vehiculos();
        $vehiculos->placa = $request->placa;
        $vehiculos->marca = $request->marca;
        $vehiculos->modelo = $request->modelo;
        $vehiculos->anio = $request->anio;
        $vehiculos->serial_motor = $request->serial_motor;
        $vehiculos->serial_carro = $request->serial_carro;
        $vehiculos->color = $request->color;  
        $vehiculos->tipo = $request->tipo;                      
        $vehiculos->status = 'activo';
        $vehiculos->save();

      return redirect('/listvehi')->with('message','El vehiculo ha sido guardado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    

/*       public function findRif(Request $req)
    {
        return $this->propietarios->findByName($req->input('q'));
    }
*/        
}
