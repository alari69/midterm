<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;



class UpdateUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdateName()
    {
        $user = new User();
        $user->name = 'Steve Smith';
        $user->email = str_random(10);
        $user->password = str_random(10);

        $user->save();

        $this->assertTrue($user->save());

    }


};
