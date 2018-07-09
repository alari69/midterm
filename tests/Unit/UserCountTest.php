<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Constraint\IsType;
use App\User;

class UserCountTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $users = User::All();
        $recordCount = $users->count();
        $this->assertInternalType(IsType::TYPE_INT, $recordCount=50);

    }
}
