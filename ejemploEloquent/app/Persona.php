<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //protected $table = 'personas'; //Por defecto tomaría la tabla 'personas'.
    protected $primaryKey = 'DNI';  //Por defecto el campo clave es 'id', entero y autonumérico.
    public $incrementing = false; //Para indicarle que la clave no es autoincremental.
    protected $keyType = 'string';   //Indicamos que la clave no es entera.
    public $timestamps = false;   //Con esto Eloquent no maneja automáticamente created_at ni updated_at.
    
}
