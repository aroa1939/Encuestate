<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    //
    protected $fillable = ['tituloPregunta', 'encuesta_id'];

    public function encuesta(){
        return $this-> belongsTo('App\Encuesta');
    }
   public function respuesta(){
       return $this-> hasMany('App\Respuesta');
    }
}
