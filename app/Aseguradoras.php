<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aseguradoras extends Model
{
    public function corredor()
    {
        return $this->hasMany('App\Corredores');
    }
}
