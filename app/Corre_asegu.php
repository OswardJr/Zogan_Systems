<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corre_asegu extends Model
{
	public $table = "Corre_asegu";

    public function aseguradoras(){
    	return $this->belongsToMany('App\Aseguradoras', 'id');
    }

    public function corredores(){
		return $this->belongsToMany('App\Corredores');    	
    }
}
