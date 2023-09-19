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

    // the following test was never ran because my math teacher
    // instilled in me a deep fear of dividing by zero
    // proceed at your own risk!
    // public function testDivide2()
    // {
    //     $divide = new Divide();
    //     $result = $divide->runCalculation(10, 0);

    //     $this->expectException();
    // }
}
