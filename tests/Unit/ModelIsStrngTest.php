<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Constraint\IsType;
use App\Car;

class ModelIsStrngTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testModelIsString()
    {
        $cars = Car::find(1);
        $model = $cars->model;
        $this->assertInternalType(IsType::TYPE_STRING, $model);
    }
}
