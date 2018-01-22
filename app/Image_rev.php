<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image_rev extends Model {
	public function imagen() {
		return $this->hasMany('App\Imagenes');
	}
}
