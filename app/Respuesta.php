<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    //
    protected $fillable = [
        'respuesta', 'pregunta_id'];


    public function pregunta(){
        return $this-> belongsTo('App\Pregunta');
    }


}
