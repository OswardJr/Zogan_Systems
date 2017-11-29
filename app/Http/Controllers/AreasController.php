<?php

namespace App\Http\Controllers;

use App\Areas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AreasController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }

    private $path = 'areas';

    public function index()
    {
      $areas = DB::table('areas')->where('status', '=', 'activo')->orderBy('codigo', 'desc')->paginate(15);

      return view('/listareas', ['areas' => $areas]);
    }

    public function create()
    {
        return view('areas/create');
    }

    public function store(Request $request)
    {
      Validator::make($request->all(), [
        'codigo'=> 'required|unique:areas',
        'descripcion' => 'required',
        ])->validate();

        $areas = new Areas();
        $areas->codigo = $request->codigo;
        $areas->descripcion = $request->descripcion;
        $areas->status = 'activo';
        $areas->save();

      return redirect('/listareas')->with('message','¡El área ha sido guardada de manera exitosa!');
    }

    public function show($id)
    {
        $areas = Areas::findOrFail($id);
        return view($this->path.'.see', compact('areas'));
    }

    public function edit($id)
    {
        $areas = Areas::findOrFail($id);
        return view($this->path.'.edit', compact('areas'));
    }

    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'codigo'=> 'required',
        'descripcion' => 'required',
        ]);

          $areas = Areas::findOrFail($id);
          $areas->codigo = $request->codigo;
          $areas->descripcion = $request->descripcion;
          $areas->status = 'activo';
          $areas->save();

          return redirect()->route('areas.index')->with('message','¡Área actualizada con éxito!');
    }

    public function destroy($id)
    {
        $ars = DB::table('areas')
            ->where('id', '=', $id)
            ->where('status', '=', 'activo')
            ->update(['status' => 'inactivo']);

        return redirect()->route('areas.index')->with('message','¡Área eliminada de manera exitosa!');
    }
}
