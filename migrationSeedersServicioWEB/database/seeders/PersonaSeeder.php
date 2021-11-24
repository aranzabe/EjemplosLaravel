<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Persona;

/**
 * * php artisan db:seed --class=PersonaSeeder
 */
class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Persona::factory(10)->create();
    }
}
