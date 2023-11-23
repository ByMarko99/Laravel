<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profesor>
 */
class ProfesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           "nombreApellido" => $this->faker->firstName() . " " . $this->faker->lastName(),
            "profesion" => $this->faker->randomElement(['Ingeniero', 'Licenciado', 'Doctor']),
            "gradoAcademico" => $this->faker->word(),
            "telefono" => $this->faker->phoneNumber()
        ];
    }
}
