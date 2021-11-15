<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    use HasFactory;

    /*
      Enlaces de interés:
      https://laravel.com/docs/5.8/eloquent-relationships
      https://styde.net/relaciones-con-el-orm-eloquent/
      https://www.laraveltip.com/filtrar-datos-de-tablas-relacionadas-con-eloquent/
      https://laravel.com/api/6.x/Illuminate/Database/Eloquent.html
     */

    //Aquí descomentamos todo porque la tabla tiene las características por defecto de Eloquent.
    protected $table = 'propiedades'; //Por defecto tomaría la tabla 'propiedads' que no existe.
    //protected $primaryKey = 'id';  //Por defecto el campo clave es 'id', entero y autonumérico. (Ya lo cumple).
    //public $incrementing = false; //Para indicarle que la clave no es autoincremental. (Ya lo cumple).
    //protected $keyType = 'string';   //Indicamos que la clave no es entera. (Ya lo cumple).
    public $timestamps = false;   //Con esto Eloquent no maneja automáticamente created_at ni updated_at.

    

    public function usuarios() {
        //Si las relaciones con las tablas fueran uno a uno sería igual pero con hasOne.
        return $this->hasMany(Persona::class, 'DNI', 'DNI');
        //return $this->hasMany(Persona::class); --> Esto equivale a:     return $this->hasMany(Persona::class,'user_id','id');
    }
    
    public function coches(){
        return $this->hasMany(Coche::class, 'Matricula', 'Matricula');
        //return $this->hasMany(Coche::class); //Si lo ponemos así el join lo haría usando los campos 'id' (que son los campos clave de Eloquent por defecto). 
    }
    
    //hasMany se utiliza en una relación One To Many mientras que belongsToMany es para una de Many to Many.
    public function usuariosBelong(){
        return $this->belongsTo(Persona::class, 'DNI' , 'DNI');
    }
    
    public function cochesBelong(){
        return $this->belongsTo(Coche::class, 'Matricula', 'Matricula');
    }
    
    public function propietariosCoche($dni){
        return $this->usuarios()->where('DNI', $dni)->get();
    }
   
}
