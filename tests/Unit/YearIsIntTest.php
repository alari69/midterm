<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class YearIsIntTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testYearIsInt()
    {
        $car = Car::find(10);

        $this->assertInternalType('int',(int)$car->year);
    }
}
