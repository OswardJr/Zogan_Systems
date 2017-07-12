<?php

namespace App\Http\Controllers;

use App\Propietarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class VehiculosController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
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

    // public function getVehiculo ($id){
    //   // // $auto = DB::table('vehiculos')
    //   // //       ->select('placa', 'marca', 'modelo', 'serial_motor', 'serial_carro')
    //   // //        ->where('placa', $id)
    //   // //       ->get();

    //   // // return response()->json($auto);

    //   //  $autos = DB::select('
    //   //         SELECT i.vehiculo_id,i.status, q.marca,q.modelo,q.placa,propietarios.nombre_completo
    //   //         FROM reparaciones as i
    //   //         inner JOIN vehiculos as q
    //   //         ON i.vehiculo_id = q.id
    //   //         INNER JOIN propietarios
    //   //         ON i.propietario_id = propietarios.id');
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
      $return_arr = array();
      $autoPlaca = $request->term;
      $autos = DB::table('vehiculos')
      ->select('placa')
      ->where('placa', 'like', ''.$autoPlaca.'%')
      ->get();

      foreach ($autos as $auto) {
       $return_arr[] = $auto->placa;
     }
     return response()->json($return_arr);
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
