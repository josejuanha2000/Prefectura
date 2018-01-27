<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semana extends Model
{
    protected $table = 'semanas';
    protected $fillable =['id','id_semana'];

 public function falta()
    {
        return $this->hasOne('App\Falta');
        
    }
 
}
