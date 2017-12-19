<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CardsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\Card::class, 50)->create();

    }
}
