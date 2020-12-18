<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model {
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

    public function propiedad() { //1 a n desde Personas. Es decir aquellas personas que tiene 1 o varios coches en propiedad.
        //Método para investigar.
        return $this->belongsTo(Persona::class, 'DNI');
        /*
          /* Para investigar.
          return $this->belongsToMany('App\Persona')
          ->using('App\PropPersona') <-- Crear este modelo?
          ->withPivot([
          'DNI',
          'Nombre',
          'Marca',
          'Modelo'
          ]);
         */
    }

    public function usuarios() {
        //Método para investigar.
        return $this->hasMany(Persona::class, 'DNI', 'DNI');
    }

}
