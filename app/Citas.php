<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
  public static function search($keyword) 
  {
    $finder = DB::table('reparaciones')->get();

    return $finder;
  } 
}
