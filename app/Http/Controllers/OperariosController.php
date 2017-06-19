<?php

namespace App\Http\Controllers;

use App\Operarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class OperariosController extends Controller
{
    private $path = 'operarios';

    public function index()
    {
      $operarios = DB::table('operarios')->orderBy('cedula', 'desc')->paginate(15);

      return view('/listope', ['operarios' => $operarios]);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $operarios = DB::table('operarios')->get();

      return view('operarios/create', ['operarios' => $operarios]);         
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
        'cedula'=> 'required',
        'nombre' => 'required',
        'apellido' => 'required',
        'telefono' => 'required',
        'email' => 'required',
        'tipo' => 'required',
        'direccion' => 'required',
        ])->validate();

        $operarios = new Operarios();
        $operarios->cedula = $request->cedula;
        $operarios->nombre = $request->nombre;
        $operarios->apellido = $request->apellido;
        $operarios->telefono = $request->telefono;
        $operarios->email = $request->email;
        $operarios->tipo = $request->tipo;
        $operarios->direccion = $request->direccion;        
        $operarios->status = 'activo';
        $operarios->save();

      return redirect('/listope')->with('message','El operario ha sido guardado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $operarios = Operarios::findOrFail($id);
        return view($this->path.'.see', compact('operarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $operarios = Operarios::findOrFail($id);
        return view($this->path.'.edit', compact('operarios')); 
    }

    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'cedula'=> 'required',
        'nombre' => 'required',
        'apellido' => 'required',
        'telefono' => 'required',
        'email' => 'required',
        'tipo' => 'required',
        'direccion' => 'required',
        ]);

          $operarios = Operarios::findOrFail($id);
          $operarios->cedula = $request->cedula;
          $operarios->nombre = $request->nombre;
          $operarios->apellido = $request->apellido;
          $operarios->telefono = $request->telefono;
          $operarios->email = $request->email;
          $operarios->tipo = $request->tipo;
          $operarios->direccion = $request->direccion;
          $operarios->status = 'activo';

          $operarios->save();
          return redirect()->route('operarios.index');
    }

    public function destroy($id)
    {
// $ope = Operarios::find($id);
//        $ope->delete();
//        return back()->with('listope', 'Fue eliminado exitosamente'); 
//            $operarios = DB::table('operarios')->where('id', '?')->update(['status' => 'inactivo']);

        $ope = DB::select('UPDATE operarios SET status = "inactivo" WHERE id = ?', [1]);
        
        return redirect()->route('operarios.index'); 
    }
}
