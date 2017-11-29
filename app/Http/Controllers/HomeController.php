<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Reparaciones;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dash = DB::select('SELECT COUNT(*) FROM reparaciones WHERE status = "activo"');

        $dash = DB::table('vehiculos')->where('usuario_id', '=', Auth::user()->id)->where('status', '=', 'NINGUNO')->count();

        $hash = DB::table('citas')->where('usuario_id', '=', Auth::user()->id)->where('act', '=', 'ASIGNADA')->count();

        return view('index', compact('dash','hash'));
    }
}
