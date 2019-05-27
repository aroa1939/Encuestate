<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    //
    protected $fillable = ['TituloPregunta'];

    public function encuesta(){
        return $this-> belongsTo('App/encuestas');
    }
    public function respuesta(){
        return $this-> hasMany('App/Respuesta');
    }
}
