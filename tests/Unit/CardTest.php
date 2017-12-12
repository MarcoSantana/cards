<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Model;

class CardTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /**
     * Validates the card data facgtory generated
     *
     * @return void
     * @author Marco A. Santana
     */
    public function testCardContents()
    {
        $card = factory(\App\Card::class)->make();
        dd($card);
        $this->assertInstanceOf($card, new \App\Card);
    }
}
