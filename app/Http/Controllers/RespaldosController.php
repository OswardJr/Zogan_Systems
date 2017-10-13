<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RespaldosController extends Controller
{
    public function index()
    {
        return view('respaldo.index');
    }
}
