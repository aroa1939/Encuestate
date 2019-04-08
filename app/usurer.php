<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 08/04/2019
 * Time: 16:18
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class client extends Model
{
protected $fillable = ['name', 'surname1', 'surname2', 'telephone','cp','email', 'password', 'birthday', 'id','NIF', 'nationality', 'NIE', 'passport'];


}