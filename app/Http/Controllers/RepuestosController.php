<?php

namespace App\Http\Controllers;

use App\Repuestos;
use App\Areas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RepuestosController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }

    private $path = 'repuestos';

    public function index()
    {
      $repuestos = DB::table('repuestos')->where('status', '=', 'activo')->orderBy('codigo', 'desc')->paginate(15);

      return view('/listrepuesto', ['repuestos' => $repuestos]);
    }

    public function create()
    {
        $repuestos = DB::table('areas')->get();

        return view('repuestos/create', ['repuestos' => $repuestos]);
    }

    public function store(Request $request)
    {
      Validator::make($request->all(), [
        'codigo'=> 'required',
        'descripcion' => 'required',
        'cantidad' => 'required',
        'marca' => 'required',
        'modelo' => 'required',
        ])->validate();

        $repuestos = new Repuestos();
        $repuestos->codigo = $request->codigo;
        $repuestos->descripcion = $request->descripcion;
        $repuestos->cantidad = $request->cantidad;
        $repuestos->marca = $request->marca;
        $repuestos->modelo = $request->modelo;
        $repu = $request->get('one');
        $repuestos->area = $repu;
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
      $repuestos = DB::table('areas')->get();

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
        ]);

          $repuestos = Repuestos::findOrFail($id);
          $repuestos->codigo = $request->codigo;
          $repuestos->descripcion = $request->descripcion;
          $repuestos->cantidad = $request->cantidad;
          $repuestos->marca = $request->marca;
          $repuestos->modelo = $request->modelo;
          $repuestos->status = 'activo';
          $repuestos->save();

          return redirect()->route('repuestos.index');
    }

    public function destroy($id)
    {
        $reps = DB::table('repuestos')
            ->where('id', '=', $id)
            ->where('status', '=', 'activo')
            ->update(['status' => 'inactivo']);

        return redirect()->route('repuestos.index');
    }
}
