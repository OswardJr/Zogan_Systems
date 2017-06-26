<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden_repues extends Model
{
    protected $table = 'orden_repues';

    public function product(){
        return $this->belongsTo('App\Repuestos');
}
