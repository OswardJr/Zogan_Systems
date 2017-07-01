<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reparaciones extends Model
{
    public function detail(){
        return $this->hasMany('App\Orden_repues');
    }
    public function revisions()
    {
        return $this->hasMany('App\Revisiones');
    }  
}
