<?php

namespace App\Http\Controllers;

use App\Reparaciones;
use App\Revisiones;
use App\Vehiculos;
use App\Propietarios;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RevisionesController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index($id)
    {
      $tiposRev = array('recepcion','desarmado','latoneria','preparacion','pintura','pulitura','limpieza','entrega');

      $auto = Vehiculos::find($id);

      if ( !$auto ) {
        abort(404);
      }

      $prop = Propietarios::find($id);

      if ( !$prop ) {
        abort(404);
      }

      $repa = Reparaciones::find($id);

      if ( !$repa ) {
        abort(404);
      }

      $revs = Reparaciones::find($id)->revisions;

      foreach ($revs as $rev) {
        if ($rev->tipo == 'desarmado') {
          $tiposRev = array_except($tiposRev, [1]);
        }
        elseif ($rev->tipo == 'latoneria') {
          $tiposRev = array_except($tiposRev, [2]);
        }
        elseif ($rev->tipo == 'pintura') {
          $tiposRev = array_except($tiposRev, [4]);
        }
        elseif ($rev->tipo == 'preparacion') {
          $tiposRev = array_except($tiposRev, [3]);
        }
        elseif ($rev->tipo == 'pulitura') {
          $tiposRev = array_except($tiposRev, [5]);
        }
        elseif ($rev->tipo == 'limpieza') {
          $tiposRev = array_except($tiposRev, [6]);
        }
        elseif ($rev->tipo == 'entrega') {
          $tiposRev = array_except($tiposRev, [7]);
        }
        elseif ($rev->tipo == 'recepcion') {
          $tiposRev = array_except($tiposRev, [0]);
        }
      }

      return view('revisiones.new', compact('auto','prop','repa', 'revs', 'tiposRev'));
    }

    public function create()
    {
        //
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
