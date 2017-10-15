<?php

namespace App\Http\Controllers;

use App\Vehiculos;
use App\Revisiones;
use App\Propietarios;
use App\Reparaciones;
use App\Ayudantes;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RevisionesController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }

    private $path = 'ayudantes';

    public function index($id)
    {
      $tiposRev = array('DESARMADO','LATONERIA','PREPARACION','PINTURA','PULITURA','LIMPIEZA','ENTREGA');

      $auto = Vehiculos::find($id);

      if ( !$auto ) {
        abort(404);
      }

      $ayudantes = DB::table('ayudantes')->get();

      $prop = Propietarios::find($id);

      if ( !$auto ) {
        abort(404);
      }      

      $revs = Vehiculos::find($id)->revisions;


      foreach ($revs as $rev) {
        if ($rev->tipo == 'LATONERIA') {
          $tiposRev = array_except($tiposRev, [1]);
        }
        elseif ($rev->tipo == 'PREPARACION') {
          $tiposRev = array_except($tiposRev, [2]);
        }
        elseif ($rev->tipo == 'PULITURA') {
          $tiposRev = array_except($tiposRev, [4]);
        }
        elseif ($rev->tipo == 'PINTURA') {
          $tiposRev = array_except($tiposRev, [3]);
        }
        elseif ($rev->tipo == 'LIMPIEZA') {
          $tiposRev = array_except($tiposRev, [5]);
        }
        elseif ($rev->tipo == 'ENTREGA') {
          $tiposRev = array_except($tiposRev, [6]);
        }
        elseif ($rev->tipo == 'DESARMADO') {
          $tiposRev = array_except($tiposRev, [0]);
        }
      }

      return view('revisiones.new', compact('auto', 'revs', 'tiposRev', 'prop', 'ayudantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Revision  $revision
     * @return \Illuminate\Http\Response
     */
    public function show(Revision $revision)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Revision  $revision
     * @return \Illuminate\Http\Response
     */
    public function edit(Revision $revision)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Revision  $revision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Revision $revision)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Revision  $revision
     * @return \Illuminate\Http\Response
     */
    public function destroy(Revision $revision)
    {
        //
    }
}
