<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Postulacion>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombres_rs' => $this->faker->name(),
            'dni' => $this->faker->unique()->numerify('###########'), // Un número de 11 dígitos
            'ruc' => $this->faker->unique()->optional()->numerify('###########'), // Un número de 11 dígitos, opcional
            'correo' => $this->faker->unique()->safeEmail(),
            'celular' => $this->faker->optional()->numerify('09########'), // Un número de celular en formato peruano
            'rol' => $this->faker->randomElement([1, 2]), // Puedes definir los roles que desees
            'user' => $this->faker->unique()->userName(),
            'password' => bcrypt('password'), // Contraseña encriptada
            'archivo_cv' => $this->faker->optional()->filePath(), // Ruta de un archivo de CV opcional
        ];
    }
}
