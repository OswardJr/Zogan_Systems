<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aseguradoras extends Model
{
    public function corredor()
    {
        return $this->hasMany('App\Corredores');
    }
    public function analista()
    {
        return $this->hasMany('App\Analistas');
    }
    public function orden()
    {
        return $this->hasMany('App\Ordenes');
    }    
}
