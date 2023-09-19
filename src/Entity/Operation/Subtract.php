<?php

namespace App\Entity\Operation;



class Subtract implements OperationInterface
{
    public function runCalculation($firstNumber, $secondNumber)
    {
        return $firstNumber - $secondNumber;
    }
}