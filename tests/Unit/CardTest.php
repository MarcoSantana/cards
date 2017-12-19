<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Database\Eloquent\Model;

class CardTest extends TestCase
{
    // use RefreshDatabase;
    // use DatabaseMigrations;


    public function testCardsResponds()
    {
        $user = factory(\App\User::class)->create(['password' => "password"]);
        //
        $payload = ['email' => $user->email, 'password' => "password"];
        $cards = factory(\App\Card::class, 50)->create();
        $response = $this->json('GET', 'api/cards');
        $response
            ->assertStatus(200)
            ->assertSuccessful()
            ->assertJson(['id']);
    }
}
