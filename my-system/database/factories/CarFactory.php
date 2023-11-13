<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->carName(),
            'description' => null,
            'year' => $this->faker->year(),
        ];
    }
    public function carName()
    {
        $nombresCarros = ['CRV', 'Fiesta', 'Camaro', 'Raptor', 'Tacoma', 'BMW', 'Mercedes-Benz', 'Audi','Ferrari'];
        $indiceAleatorio = rand(0, count($nombresCarros) - 1);
        return $nombresCarros[$indiceAleatorio];
    }
}
