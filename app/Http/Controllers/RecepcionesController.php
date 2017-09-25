<?php

namespace App\Http\Controllers;

use App\Vehiculos;
use App\Recepciones;
use App\Propietarios;
use App\Reparaciones;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RecepcionesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($id)
    {
      $tiposRec = array('RECEPCION');

      $auto = Vehiculos::find($id);

      if ( !$auto ) {
        abort(404);
      }

      $prop = Propietarios::find($id);

      if ( !$auto ) {
        abort(404);
      }      

      $recs = Vehiculos::find($id)->recepcions;


      foreach ($recs as $rec) {
        if ($rec->tipo == 'RECEPCION') {
          $tiposRec = array_except($tiposRec, [0]);
        }
      }

      return view('recepciones.recepcion', compact('auto', 'recs', 'tiposRec', 'prop'));
    }

    public function create()
    {
        return view('recepciones.recepcion');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
