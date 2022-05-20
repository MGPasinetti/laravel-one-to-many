<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) {
            User::create([
                'name'      => $faker->phoneNumber(),
                'email'     => $faker->address(),
                'password'  => Hash::make('qwertys')
            ]);
        }
    }
}
