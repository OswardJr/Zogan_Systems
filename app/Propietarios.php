<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propietarios extends Model
{
    public function vehiculos()
    {
        return $this->hasMany('App\Vehiculos');
    }
}
