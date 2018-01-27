<?php

namespace App;
use Illuminate\Database\Eloquent\Model;



class Periodo extends Model
{
    protected $table = 'periodos';
    protected $fillable =['id','id_periodo'];

   public function maestro()
    {
        return $this->hasOne('App\Maestro');
        
    }
}
