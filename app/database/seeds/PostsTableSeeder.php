<?php

use Faker\Factory;

class PostsTableSeeder extends Seeder{

    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 100; $i++)
        {
            $user = User::all()->random();

            $title = implode($faker->words(rand(5, 7)), ' ');

            Post::create(array(
                'title' => $title,
                'body' => $faker->text,
                'slug' => $title,
                'user_id' => $user->id,
            ));
        }
    }
}