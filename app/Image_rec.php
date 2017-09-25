<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image_Rec extends Model
{
	public $table = "image_recs";

    public function imagen()
    {
        return $this->hasMany('App\Imagenes');
    }
}
