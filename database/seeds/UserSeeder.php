<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create('nl_NL');


        for ($i = 1; $i < 50; $i++){
            App\User::create([
               'name' => $faker->name,
               'email' => $faker->email,
                'password' => Hash::make('secret'),
            ]);
        }

    }
}
