<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * Para ejecutar: php artisan db:seed
     * Para especificar un seeder concreto, por ejemplo este: php artisan db:seed --class=UserSeeder
     *
     * @return void
     */
    public function run()
    {
        $fak = \Faker\Factory::create('es_ES');
        for($i=1;$i<=10;$i++){
            $us = new \App\Models\User;
            $us->name = $fak->firstName.' '.$fak->lastName;
            $us->email = $fak->email;
            $us->age = $fak->numberBetween(18, 120);
            $us->password = $fak->password;
            $us->save();
        }
    }
}
