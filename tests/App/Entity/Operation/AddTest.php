<?php

namespace Tests\App\Entity\Operation;

use App\Entity\Operation\Add;
use PHPUnit\Framework\TestCase;

class AddTest extends TestCase
{
    public function testAdd()
    {
        $add = new Add();
        $result = $add->runCalculation(10, 20);

        $this->assertEquals(30, $result);
    }
}
