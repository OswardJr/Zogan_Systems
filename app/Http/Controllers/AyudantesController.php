<?php

namespace App\Http\Controllers;

use App\Ayudantes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AyudantesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    private $path = 'ayudantes';

    public function index()
    {
      $ayudantes = DB::table('ayudantes')->where('status', '=', 'activo')->orderBy('cedula', 'desc')->paginate(15);

      return view('/listayu', ['ayudantes' => $ayudantes]);
    }

    public function create()
    {
      $ayudantes = DB::table('ayudantes')->get();

      return view('ayudantes/create', ['ayudantes' => $ayudantes]);
    }

    public function store(Request $request)
    {
      Validator::make($request->all(), [
        'cedula'=> 'required|unique:ayudantes',
        'nombre' => 'required',
        'apellido' => 'required',
        'telefono' => 'required',
        'email' => 'required',
        'direccion' => 'required',
        ])->validate();

        $ayudantes = new Ayudantes();
        $ayudantes->cedula = $request->cedula;
        $ayudantes->nombre = $request->nombre;
        $ayudantes->apellido = $request->apellido;
        $ayudantes->telefono = $request->telefono;
        $ayudantes->email = $request->email;
        $ayudantes->direccion = $request->direccion;
        $ayudantes->status = 'activo';
        $ayudantes->save();

      return redirect('/listayu')->with('message','¡El ayudante ha sido guardado exitosamente!');
    }

    public function show($id)
    {
        $ayudantes = Ayudantes::findOrFail($id);
        return view($this->path.'.see', compact('ayudantes'));
    }

    public function edit($id)
    {
        $ayudantes = Ayudantes::findOrFail($id);
        return view($this->path.'.edit', compact('ayudantes'));
    }

    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'cedula'=> 'required',
        'nombre' => 'required',
        'apellido' => 'required',
        'telefono' => 'required',
        'email' => 'required',
        'direccion' => 'required',
        ]);

          $ayudantes = Ayudantes::findOrFail($id);
          $ayudantes->cedula = $request->cedula;
          $ayudantes->nombre = $request->nombre;
          $ayudantes->apellido = $request->apellido;
          $ayudantes->telefono = $request->telefono;
          $ayudantes->email = $request->email;
          $ayudantes->direccion = $request->direccion;
          $ayudantes->status = 'activo';

          $ayudantes->save();
          return redirect()->route('ayudantes.index')->with('message','¡Ayudante actualizado con éxito!');
    }

    public function destroy($id)
    {
        $ayu = DB::table('ayudantes')
            ->where('id', '=', $id)
            ->where('status', '=', 'activo')
            ->update(['status' => 'inactivo']);

        return redirect()->route('ayudantes.index')->with('message','¡Ayudante eliminado de manera exitosa!');
    }
public function getAyudante($cedula) {

    $ayu = DB::table('ayudantes')
      ->select('id', 'cedula')
      ->where('cedula', $cedula)
      ->get();

    return response()->json([
      'ayu' => $ayu,
    ]);
  }

  public function on(Request $request) {
    $return_arr = array();
    $ayudanteCedula = $request->term;
    $ayudantes = DB::table('ayudantes')
      ->select('cedula')
      ->where('cedula', 'like', '' . $ayudanteCedula . '%')
      ->get();

    foreach ($ayudantes as $ayu) {
      $return_arr[] = $ayu->cedula;
    }
    return response()->json($return_arr);
  }     
}
