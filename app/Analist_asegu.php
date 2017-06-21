<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Analist_asegu extends Model
{
	public $table = "Corre_asegu";

    public function aseguradoras(){
    	return $this->belongsToMany('App\Aseguradoras', 'id');
    }

    public function analistas(){
		return $this->belongsToMany('App\Analistas');    	
    }
}
