<?php

namespace Tests\App\Entity\Operation;

use App\Entity\Operation\Multiply;
use PHPUnit\Framework\TestCase;

class MultiplyTest extends TestCase
{
    public function testMultiply()
    {
        $multiply = new Multiply();
        $result = $multiply->runCalculation(5, 5);

        $this->assertEquals(25, $result);
    }
}
