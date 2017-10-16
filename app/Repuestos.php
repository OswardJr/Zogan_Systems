<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repuestos extends Model
{
    public function area()
    {
        return $this->hasMany('App\Areas');
    }
}
