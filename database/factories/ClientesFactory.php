<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clientes>
 */
class ClientesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->Name,
            'apellido' => $this->faker->Name,
            'tipoCliente' => $this->faker->Name,
            'correo_electronico' =>$this->faker->email, 
            'telefono' => $this->faker->numerify('########'),
            'sexo' =>$this->faker->randomElement($array = array ('F','M')),
        ];
    }
}
