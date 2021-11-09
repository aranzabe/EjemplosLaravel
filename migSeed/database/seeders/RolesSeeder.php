<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $ro = new \App\Models\Rol;
        $ro->description = 'Administrador';
        $ro->save();
        $ro = new \App\Models\Rol;
        $ro->description = 'Usuario';
        $ro->save();
        $ro = new \App\Models\Rol;
        $ro->description = 'Invitado';
        $ro->save();
    }

}
