<?php

namespace App\Http\Controllers;

use App\Propietarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PropietariosController extends Controller
{
    private $path = 'propietarios';
    
    public function __CONSTRUCT()
    {
        $this->propietarios = new Propietarios();            
    }

    public function index()
    {
      $propietarios = DB::table('propietarios')->orderBy('rif', 'desc')->paginate(15);

      return view('/listprop', ['propietarios' => $propietarios]);      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('propietarios/create');
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
        'nombre' => 'required',
        'apellido' => 'required',
        'celular' => 'required',        
        'telefono' => 'required',
        'email' => 'required',
        'direccion' => 'required',
        ])->validate();

        $propietarios = new Propietarios();
        $propietarios->rif = $request->rif;
        $propietarios->nombre = $request->nombre;
        $propietarios->apellido = $request->apellido;
        $propietarios->celular = $request->celular;
        $propietarios->telefono = $request->telefono;
        $propietarios->email = $request->email;
        $propietarios->direccion = $request->direccion;        
        $propietarios->status = 'activo';
        $propietarios->save();

      return redirect('/listprop')->with('message','El propietario ha sido guardado exitosamente!');          
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $propietarios = Propietarios::findOrFail($id);
        return view($this->path.'.see', compact('propietarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $propietarios = Propietarios::findOrFail($id);
        return view($this->path.'.edit', compact('propietarios'));       
    }

    public function update(Request $request, $id)
    {
      Validator::make($request->all(), [
        'rif'=> 'required',
        'nombre' => 'required',
        'apellido' => 'required',
        'celular' => 'required',        
        'telefono' => 'required',
        'email' => 'required',
        'direccion' => 'required',
        ])->validate();

        $propietarios = Propietarios::findOrFail($id);
        $propietarios->rif = $request->rif;
        $propietarios->nombre = $request->nombre;
        $propietarios->apellido = $request->apellido;
        $propietarios->celular = $request->celular;
        $propietarios->telefono = $request->telefono;
        $propietarios->email = $request->email;
        $propietarios->direccion = $request->direccion;        
        $propietarios->status = 'activo';
        $propietarios->save();

          return redirect()->route('propietarios.index');
    }

    public function destroy($id)
    {
//        DB::table('propietarios')->where('id', 7)->update(['status' => 'inactivo']);
    
/*
        $ope = Operarios::findOrFail($id);
        $ope->delete();

        return redirect()->route('operarios.index');
*/
    }

/*    public function findRif(Request $req)
    {
        return $this->_clientRepo
                    ->findByName($req->input('q'));
    }    
*/
}
