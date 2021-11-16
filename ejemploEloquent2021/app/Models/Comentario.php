<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    public $timestamps = false;   //Con esto Eloquent no maneja automáticamente created_at ni updated_at.

    public function usuarios(){
        return $this->belongsTo('App\Models\Persona','DNI','DNI');
    }
}
