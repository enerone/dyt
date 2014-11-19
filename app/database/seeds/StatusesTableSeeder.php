<?php

use Faker\Factory as Faker;
use Dyt\Statuses\Status;
use Dyt\Users\User;

class StatusesTableSeeder extends Seeder {
    public function run(){
        $faker= Faker::create();
        $users= User::lists('id');

        foreach(range(1,1000) as $index){
            Status::create([
                'user_id'=> $faker->randomElement($users),
                'body' => $faker->sentence(),
                'created_at' => $faker->dateTime()
            ]);
        }
    }
}