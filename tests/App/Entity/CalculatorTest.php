<?php

namespace Tests\App\Entity\Operation;

use App\Entity\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testCalculator()
    {
        $calculator = new Calculator();
        $calculator->setFirstNumber(10);
        $calculator->setSecondNumber(10);
        $calculator->setOperand("add");

        $result = $calculator->performCalculation();

        $this->assertEquals(20, $result);
    }
}
