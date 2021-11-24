<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comentario;

class Persona extends Model
{
    use HasFactory;

       //Aquí descomentamos todo porque la tabla tiene las características por defecto de Eloquent.
       //protected $table = 'propiedades'; //Por defecto tomaría la tabla 'propiedads' que no existe.
       //protected $primaryKey = 'id';  //Por defecto el campo clave es 'id', entero y autonumérico. (Ya lo cumple).
       //public $incrementing = false; //Para indicarle que la clave no es autoincremental. (Ya lo cumple).
       //protected $keyType = 'string';   //Indicamos que la clave no es entera. (Ya lo cumple).
       //public $timestamps = false;   //Con esto Eloquent no maneja automáticamente created_at ni updated_at.
       protected $fillable = ['nombre','edad'];

       /**
        * Podemos probar esto con php artisan tinker
        * App\Models\Persona::with('comentarios')->get()
        */
       public function comentarios(){
            return $this->hasMany(Comentario::class, 'idPersona', 'id');
            //return $this->hasMany(Coche::class); //Si lo ponemos así el join lo haría usando los campos 'id' (que son los campos clave de Eloquent por defecto). 
    }
}
