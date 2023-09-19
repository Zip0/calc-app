<?php

namespace App\Entity\Operation;



class Divide implements OperationInterface
{
    public function runCalculation($firstNumber, $secondNumber)
    {
        return $firstNumber / $secondNumber;
    }
}