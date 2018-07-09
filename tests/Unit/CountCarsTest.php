<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Constraint\IsType;
use App\Car;

class CountCarsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCountCars()
    {
        $cars = Car::All();
        $recordCount = $cars->count();
        $this->assertInternalType(IsType::TYPE_INT, $recordCount=50);
    }
}
