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
     * testSetPasswordAttribute
     *
     * @param $user 
     * @return void
     * @author Marco A. Santana
     */
    public function testSetPasswordAttribute()
    {
        //Hash::shouldReceive('make')->once()->andReturn('hashed');
        $user = factory(\App\User::class)->make();
       $user->save(); 
        //$user = new \App\User;
        //$this->assertEquals(bcrypt('secret'), $user->password);
        $this->assertTrue(Hash::check('secret', $user->password));
        //$this->assertEquals(Hash('foo'), $user->password);
    }

     
}
