<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corre_asegu extends Model
{
    public function aseguradoras(){
    	return $this->belongsToMany('App\Aseguradoras');
    }

    public function corredores(){
		return $this->belongsToMany('App\Corredores');    	
    }
}
