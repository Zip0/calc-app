<?php

namespace Tests\App\Entity\Operation;

use App\Entity\Operation\Divide;
use PHPUnit\Framework\TestCase;

class DivideTest extends TestCase
{
    public function testDivide()
    {
        $divide = new Divide();
        $result = $divide->runCalculation(10, 2);

        $this->assertEquals(5, $result);
    }
}
