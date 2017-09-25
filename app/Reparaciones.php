<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reparaciones extends Model
{
   public function revisions() 
   {
      return $this->hasMany('Reparaciones');
   }
   public function recepcions() 
   {
      return $this->hasMany('Reparaciones');
   }   
}
