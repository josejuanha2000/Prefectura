<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
Use Carbon\Carbon;

class Maestro extends Model 

{
    use  SoftDeletes;
    //use Authenticatable, CanResetPassword;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'maestros';
    protected $fillable = ['id_empleado', 'titulo', 'nombre_empleado','frecuencia','act','id_periodo','published_at'];
    
    public $timestamps=false;

    protected $dates = ['published_at'];
    

    public function scopePublished($query)
    {
        $query->where('published_at','<=', Carbon::now());

    }

    public function numeroDeFaltas($desde,$hasta,$id,$tipo_incidencia)
    {
        //return $tipo_incidencia;
        return Falta::where('id_periodo',$id)
                ->where('id_empleado',$this->id_empleado)
               // ->whereBetween('id_semana', [
               //                $desde,$hasta
               //     ])

                ->whereBetween('id_semana', [$desde , $hasta])
                //->where('id_semana', [$desde])
                //->where('id_semana', [$hasta])
               
                ->where('tipo_incidencia', $tipo_incidencia)
                
               // ->where('nombre_empleado',['LIKE','%'.$query.'%'])
                //->OrderBy('nombre_empleado','asc')->get();
                   ->count();
    }

    public function promedioDeFaltas($desde,$hasta,$id,$tipo_incidencia)
    {
        $total_frecuencia = ($this->frecuencia * $hasta) - $this->numeroDeFaltas(
        $desde,$hasta,$id,$tipo_incidencia);
        $total =  $total_frecuencia * 100;
        $promedio = $total / ($this->frecuencia * $hasta);

        return  $promedio;

    }
    public function setPublishedAtAttribute($date)
    {
        /*$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);*/

        $this->attributes['published_at'] = Carbon::parse($date);

        /*$this->attributes['published_at'] = Carbon::parse($date);  No guarda la hora en los registros, solo la fecha*/
    }
    public function getPublishedAttribute($date)
    {
    return  Carbon::parse($date)->format('Y-m-d');

    }

    public function faltas()
    {
        return $this->hasMany('App\Falta','id_maestro','id');

    }

   public function periodo()
    {
        return $this->hasMany('App\Periodo','id_periodo','id');

    }
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    /*protected $hidden = [
        'password', 'remember_token',*/

}
