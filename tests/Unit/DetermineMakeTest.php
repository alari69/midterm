<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Constraint\IsType;
use App\Car;

class DetermineMakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */



    public function testDetMake1()
    {
        $car = Car::find(1);
        $make = $car->make;

        $this->assertEquals('Honda', $make);
    }
    public function testDetMake2()
    {
        $car = Car::find(1);
        $make = $car->make;

        $this->assertEquals('Toyota', $make);
    }
    public function testDetMake3()
    {
        $car = Car::find(1);
        $make = $car->make;

        $this->assertEquals('Ford', $make);
    }


}
