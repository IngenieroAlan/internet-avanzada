<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $car = new Car();
        $car -> name = "Camaro";
        $car -> description = "Chevrolet Camaro";
        $car -> year = "2012";
        $car -> save();

        Car::factory(10)->create();
    }
}
