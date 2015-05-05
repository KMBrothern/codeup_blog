<?php

use Faker\Factory;

class PostsTableSeeder extends Seeder{

      /**
    *Fill db with posts
    *
    * @return void
    */
    public function run()
    {
        DB::table('posts')->delete();

        $faker = Factory::create();

        for ($i = 0; $i < 100; $i++)
        {

            $title = implode($faker->words(rand(5, 7)), ' ');

            $post = Post::create(array(
                'title' => $title,
                'body' => $faker->text,
                'slug' => $title,
                'user_id' => rand(1, 100)
                ));
        }

        // for($i = 0; $i < 10; $i++){
        //     $post1 = new Post();
        //     $post1->title =  "Girls just wanna have postsssss..many $i";
        //     $post1->body = 'some stuff about some stuff. Keeping it short, but never sweet';
        //     $post1->slug = "Girls just wanna have postsssss..many $i";
        //     $post1->user_id = 1;
        //     $post1->save();
        // }
    }
}