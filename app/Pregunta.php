<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    //
    protected $fillable = ['tituloPregunta'];

    public function encuesta(){
        return $this-> belongsTo('App\Encuesta');
    }
    public function respuesta(){
        return $this-> hasMany('App\Respuesta');
    }
}
