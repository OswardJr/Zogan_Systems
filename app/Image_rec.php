<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image_rec extends Model
{
    public function imagen()
    {
        return $this->hasMany('App\Imagenes');
    }
}
