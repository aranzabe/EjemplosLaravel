<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

/*
 * En este archivo es posible agregar todos los roles y descripciones que necesites incorporar en tu proyecto y por ende almacenar en tu base de datos.
 */

class RoleTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $role = new Role();
        $role->name = 'admin';
        $role->description = 'Administrator';
        $role->save();
        
        $role = new Role();
        $role->name = 'user';
        $role->description = 'User';
        $role->save();
    }

}
