<?php

namespace App\Http\Controllers;

use App\Aseguradoras;
use App\Corredores;
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

    public function create()
    {
        return view('aseguradoras/create');
    }

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

    public function destroy($id)
    {
        //
    }
}
