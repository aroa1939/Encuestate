<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    //
    protected $fillable = ['Titulo'];

    public function preguntas()
    {
        return $this -> hasMany('App/Preguntas');
    }



}
