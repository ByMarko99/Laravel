<?php

namespace Database\Factories;

use App\Models\Profesor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nombre" => $this->faker->word(),
            "nivel" => $this->faker->randomElement(['Básico', 'Cambridge', 'Lituano Avanzado']),
            "horasAcademicas" => $this->faker->randomElement(['10 horas', '20 horas', '99 horas']),
            "profesor_id" => Profesor::all()->random()->id
        ];
    }
}
