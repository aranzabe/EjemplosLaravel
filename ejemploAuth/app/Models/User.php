<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {

    use HasFactory,
        Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Para que este nuevo modelo pueda ser utilizado, debemos crear una relación ente él y el modelo User, el tipo de relación en este caso es 
     * many-to-many puesto que un usuario puede tener uno o más roles.
     * @return type
     */
    public function roles() {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    /*
     * Estos métodos siguientes servirán para utilizarlos en los controladores y proporcionar acceso o no a las rutas.
     */

    public function authorizeRoles($roles) {
        abort_unless($this->hasAnyRole($roles), 401);
        return true;
    }

    public function hasAnyRole($roles) {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }

    public function hasRole($role) {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }

    public function rolesQueTienes($id) {
        //dd($this->roles()->where('user_id', $id)->get());
        $datos = $this->roles()->where('user_id', $id)->get();
        $rolesUsuario = [];
        foreach ($datos as $dato) {
            $rolesUsuario[] = ['id' => $dato->attributes['id'],
                'name' => $dato->attributes['name']];
//            var_dump($dato->attributes['id']);
//            var_dump($dato->attributes['name']);
        }
//        dd($rolesUsuario);
        return $rolesUsuario;
    }

}
