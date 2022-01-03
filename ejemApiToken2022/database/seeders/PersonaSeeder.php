<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Persona;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Persona::truncate();
        $faker = \Faker\Factory::create();
        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 20; $i++) {
            Persona::create([
                'nombre' => $faker->name,
                'ciudad' => $faker->city,
            ]);
        }
    }
}
