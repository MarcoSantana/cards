<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;


/**
 * Class UserTest
 * @author Marco A. Santana
 */
class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * testSetPAsswordAttribute
     *
     * @param
     * @return void
     * @author Marco A. Santana
     */
    public function testSetPasswordAttribute()
    {
        Hash::shouldReceive('make')->once()->andReturn('hashed');
        $user = new \App\User;
        $user->password = 'foo';
        $this->assertEquals('hashed', $user->password);
    }

    public function testCanBeCreatedFromValidUserClass(): void
    {
        $this->assertInstanceOf(
            \App\User::class,
            \App\User::fromString('Testuser')
        );
    }
     
}
