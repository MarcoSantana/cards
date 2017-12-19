<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        \App\User::create([
            'name' => 'Administrator',
            'email' => 'admin@test.com',
            'password' => 'password',
        ]);*/
        factory(\App\User::class, 5)->create();


    }
}
