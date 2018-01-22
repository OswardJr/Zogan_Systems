<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo_prop extends Model {
	public function Vehiculos() {
		return $this->hasMany('App\Vehiculos');
	}
}
