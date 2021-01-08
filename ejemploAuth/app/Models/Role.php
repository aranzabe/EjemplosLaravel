<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    
    /**
     * Al igual que en el modelo de usuarios pondremos belongsToMany aquí para acabar de representar el muchos a muchos.
     * @return type
     */
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
    
    /*
     * Es momento de crear la migración correspondiente a la tabla pivot para las relaciones creadas. Para ello utilizaremos la convención de escribir 
     * las tablas en singular y en orden alfabético:
     * 
     * php artisan make:migration create_role_user_table
     */
}
