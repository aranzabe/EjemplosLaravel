<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comentario;

class ComentarioFactory extends Factory
{
    protected $model = Comentario::class; //Especificamos el model con el que vinculamos la factoría.
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idPersona' => rand(1,10),
            'texto' => $this->faker->text()
        ];
    }
}
