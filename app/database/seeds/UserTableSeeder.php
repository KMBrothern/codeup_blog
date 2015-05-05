<?php

use Faker\Factory;

class UserTableSeeder extends Seeder {

    /**
    *Fill db with user(s)
    *
    * @return void
    */
    public function run()
    {

        DB::table('users')->delete();
        $user1 =  new User;
        $user1->username = 'kb';
        $user1->email = 'kmb85@gmail.com';
        $user1->password = 'password';
        $user1->save();

        $faker = Factory::create();

        for ($i = 0; $i < 100; $i++)
        {

            $user = User::create(array(
                'username' => $faker->userName,
                'email' => $faker->email,
                'password' => $faker->word
                ));
        }

    }
}