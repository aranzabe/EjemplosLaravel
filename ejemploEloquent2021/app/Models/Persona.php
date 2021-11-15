<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    //protected $table = 'personas'; //Por defecto tomaría la tabla 'personas'.
    protected $primaryKey = 'DNI';  //Por defecto el campo clave es 'id', entero y autonumérico.
    public $incrementing = false; //Para indicarle que la clave no es autoincremental.
    protected $keyType = 'string';   //Indicamos que la clave no es entera.
    public $timestamps = false;   //Con esto Eloquent no maneja automáticamente created_at ni updated_at.
    //protected $fillable = ['nombre', 'apellido', 'edad', 'direccion'];
    //protected $hidden = ['id'];
    
    public function cochesAlquilados(){
        //Con este método hacemos la relación de personas con coches alquilados. 
        //Nos devuelve una colección a la que le podemos aplicar todos los métodos de las colecciones:
        //https://laravel.com/docs/8.x/collections
        return $this->hasMany('App\Models\Propiedad','DNI','DNI');
    }


    public function comentarios(){
        return $this->hasMany('App\Models\Comentario','DNI','DNI');
    }

    
}
