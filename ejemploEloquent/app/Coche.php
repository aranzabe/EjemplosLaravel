<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coche extends Model {

    //
    protected $primaryKey = 'Matricula';  //Por defecto el campo clave es 'id', entero y autonumérico.
    public $incrementing = false; //Para indicarle que la clave no es autoincremental.
    protected $keyType = 'string';   //Indicamos que la clave no es entera.
    public $timestamps = false;   //Con esto Eloquent no maneja automáticamente created_at ni updated_at.

    protected $fillable = [
        'Matricula', 'Marca', 'Modelo',
    ];
    
    //coches
    public function cochesAlquilados() {
        //Con este método hacemos la relación de personas con coches alquilados. 
        //Nos devuelve una colección a la que le podemos aplicar todos los métodos de las colecciones:
        //https://laravel.com/docs/8.x/collections
        return $this->hasMany('App\Propiedad', 'Matricula', 'Matricula'); 
        //return $this->hasMany('App\Propiedad'); //Si lo ponemos así el join lo haría usando los campos 'id' (que son los campos clave de Eloquent por defecto). 
        
    }

}
