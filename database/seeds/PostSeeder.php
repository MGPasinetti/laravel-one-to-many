<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) {
            Post::create([
                'user_id'   => User::inRandomOrder()->first()->id,
                'title'     => $faker->words(rand(2, 10), true),
                'content'   => $faker->text(rand(200, 1000)),
            ]);
        }
    }
}
