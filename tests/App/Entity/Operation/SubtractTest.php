<?php

namespace Tests\App\Entity\Operation;

use App\Entity\Operation\Subtract;
use PHPUnit\Framework\TestCase;

class SubtractTest extends TestCase
{
    public function testSubtract()
    {
        $subtract = new Subtract();
        $result = $subtract->runCalculation(30, 20);

        $this->assertEquals(10, $result);
    }
}
