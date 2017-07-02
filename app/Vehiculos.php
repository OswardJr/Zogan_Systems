<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    public function revisions()
    {
        return $this->hasMany('App\Revisiones','Vehiculo_id');
    } 
}
