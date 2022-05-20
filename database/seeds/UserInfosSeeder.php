<?php

use App\User;
use Illuminate\Database\Seeder;
use App\UserInfos;
use Faker\Generator as Faker;

class UserInfosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();

        foreach ($users as $user) {
            UserInfos::create([
                'user_id'   => $user->id,
                'phone'     => $faker->phoneNumber(),
                'address'   => $faker->address(),
            ]);
        }
    }
}
