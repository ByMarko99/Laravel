<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ikasle>
 */
class IkasleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "izen_abizen" => $this->faker->firstName() . " " . $this->faker->lastName(),
            "adina" => $this->faker->randomElement([18, 19, 20, 21]),
            "telefonoa" => $this->faker->phoneNumber(),
            "helbidea" => $this->faker->address()
        ];
    }
}
