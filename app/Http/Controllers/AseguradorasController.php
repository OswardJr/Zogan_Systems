<?php

namespace App\Http\Controllers;

use App\Aseguradoras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AseguradorasController extends Controller
{
    private $path = 'aseguradoras';

    public function index()
    {
      $aseguradoras = DB::table('aseguradoras')->orderBy('rif', 'desc')->paginate(15);

      return view('/listasegu', ['aseguradoras' => $aseguradoras]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aseguradoras/create');
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
        'rif'=> 'required',
        'denominacion' => 'required',       
        'telefono' => 'required',
        'email' => 'required',
        ])->validate();

        $aseguradoras = new Aseguradoras();
        $aseguradoras->rif = $request->rif;
        $aseguradoras->denominacion = $request->denominacion;
        $aseguradoras->telefono = $request->telefono;
        $aseguradoras->email = $request->email;
        $aseguradoras->status = 'activo';
        $aseguradoras->save();

      return redirect('/listasegu')->with('message','La aseguradora ha sido guardada exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aseguradoras = Aseguradoras::findOrFail($id);
        return view($this->path.'.see', compact('aseguradoras'));
    }

    public function edit($id)
    {
      $aseguradoras = Aseguradoras::findOrFail($id);
        return view($this->path.'.edit', compact('aseguradoras')); 
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
      $this->validate($request, [
        'rif'=> 'required',
        'denominacion' => 'required',
        'telefono' => 'required',
        'email' => 'required',
        ]);

          $aseguradoras = Aseguradoras::findOrFail($id);
          $aseguradoras->rif = $request->rif;
          $aseguradoras->denominacion = $request->denominacion;
          $aseguradoras->telefono = $request->telefono;
          $aseguradoras->email = $request->email;
          $aseguradoras->status = 'activo';

          $aseguradoras->save();
          return redirect()->route('aseguradoras.index');
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
