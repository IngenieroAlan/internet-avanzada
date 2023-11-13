<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user -> name = "juanito";
        $user -> email = "hola@gmail.com";
        $user -> password = "1234";
        $user -> save();

        User::factory(10)->create();
    }
}
