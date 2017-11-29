<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Hash;
use Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    private $path = 'usuarios';

    public function index()
    {
      $usuarios = DB::table('users')->where('status', '=', 'activo')->orderBy('id', 'desc')->paginate(15);

// $user = DB::table('users')->where('name', '=', Auth::user()->name);

// return view('/listusers', ['usuarios' => $usuarios, 'user' => $user]);
      return view('/listusers', ['usuarios' => $usuarios]);
    }

    public function create()
    {
      return view('usuarios/create');
    }
    public function respaldo()
    {
      return view('usuarios/respaldo');
    }

    public function store(Request $request)
    {

      Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'rol' => 'required',
        ])->validate();

        $usuarios = new User();
        $usuarios->name = $request->name;
        $usuarios->email = $request->email;
        $usuarios->password = Hash::make(Input::get('password'));
        $usuarios->rol = $request->rol;
        $usuarios->status = 'activo';
        $usuarios->save();

      return redirect('/listusers')->with('message','¡El usuario ha sido guardado exitosamente!');
    }

    public function show($id)
    {
        $usuarios = User::findOrFail($id);
        return view($this->path.'.see', compact('usuarios'));
    }

    public function edit($id)
    {
      $usuarios = User::findOrFail($id);
        return view($this->path.'.edit', compact('usuarios'));
    }

    public function update(Request $request, $id)
    {
      Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|confirmed',
            'rol' => 'required',
        ])->validate();

          $usuarios = User::findOrFail($id);
          $usuarios->name = $request->name;
          $usuarios->email = $request->email;
          $usuarios->password = Hash::make(Input::get('password'));
          $usuarios->rol = $request->rol;
          $usuarios->status = 'activo';
          $usuarios->save();

          return redirect()->route('usuarios.index')->with('message','¡Usuario actualizado con éxito!');
    }

    public function destroy($id)
    {
        $users = DB::table('users')
            ->where('id', '=', $id)
            ->where('status', '=', 'activo')
            ->update(['status' => 'inactivo']);

        return redirect()->route('usuarios.index')->with('message','¡Usuario eliminado exitosamente!');
    }
}
