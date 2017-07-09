<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reparaciones;
use App\Vehiculos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


public function create()
    {
        // get all the reports
        $reparaciones = Reparaciones::all();

        // load the view and pass the reports
      return view('citas/create', ['reparaciones' => $reparaciones]);
    }

public function search($keyword) {    
    if(isset($keyword)) {
      $data = array('reparaciones' => Reparaciones::search($keyword));
      return $data;
    } else {
      return "no results";
    }

          return view('citas/create', ['keyword' => $keyword]);

 }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
