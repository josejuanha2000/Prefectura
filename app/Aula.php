<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $table = 'aulas';
    protected $fillable = ['id_aula'];

    public function aula()
    {
        /*return $this->hasMany(Falta::class,'id','id_aula');
        /*return $this->hasMany('App\Aula','id','id_aula');*/
    }
}
