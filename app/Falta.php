<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Falta extends Model
{
    use SoftDeletes;
    protected $table = 'detalle_faltas';
    protected $fillable = ['id_empleado','fecha_falta','hora_falta','id_aula','tipo_incidencia','id_semana','id_periodo'];
    public $timestamps=false;
    
    protected $dates = ['deleted_at'];

  /* Get  */
    public function maestro()
    {
        return $this->belongsTo('App\Maestro');
        /*return $this->belongsTo('App\Maestro', 'id','id_empleado');*/
    	/*return $this->belongsToMany('App\Maestro', 'id','id_empleado');*/
    	/*return $this->belongTo(Maestro::class, 'id','id_empleado');*/

    }

    public function hora()
    {
        return $this->hasOne(Hora::class,'id','hora_falta');
        /*return $this->hasOne('App\Aula','id','aula');*/
    }
    public function aula()
    {
        return $this->hasOne(Aula::class,'id','id_aula');
       /* return $this->hasMany('App\Aula','id','id_aula');**/
        /*return $this->hasOne('App\Aula','id','id_aula');*/
    }
    public function incidencia()
    {
        return $this->hasOne(Incidencia::class,'id','tipo_incidencia');
       
    }
   public function semana()
    {
        return $this->hasOne(Semana::class,'id','id_semana');
    }
   public function periodo()
    {
        return $this->hasOne(Periodo::class,'id','id_periodo');
    }
}
