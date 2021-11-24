<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Persona;

class PersonaFactory extends Factory
{

    protected $model = Persona::class; //Especificamos el model con el que vinculamos la factoría.

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'edad' => rand(18,100)
            // 'nombre' => $this->faker->name,
            // 'edad' => $this->faker->unique()->safeEmail,
            // 'email_verified_at' => now(),
            // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // 'remember_token' => Str::random(10),
            //$faker->randomElement(['admin', 'author', 'suscriptor']),
        ];
    }
}
