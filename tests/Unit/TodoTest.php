<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use \App\Models\User;

class TodoTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     * @test
     */
    public function BasicTest()
    {
        $this->assertFalse(false);
    }

    /**
     * @test
     **/
    public function takeAName(){

        $user =new User;

        $user->setName('Bangladesh');

        $this->assertEquals($user->getName(),'Bangladesh');

    }

    /**
     * @test
     **/
    public function takeAnotherName(){

        $user =new User;

        $user->setAnotherName('ABeautifulCountry');

        $this->assertEquals($user->getAnotherName(),'ABeautifulCountry');

    }

}
