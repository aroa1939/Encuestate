<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    //
    protected $fillable = [
        'Respuesta'];


    public function pregunta(){
        return $this-> belongsTo('App/Respuesta');
    }

}
