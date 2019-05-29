<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pregunta;

class Encuesta extends Model
{
    //
    protected $fillable = ['titulo'];

    public function preguntas()
    {
        return $this -> hasMany('App\Pregunta');
    }



}
