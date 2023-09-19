<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class CalculatorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstNumber', NumberType::class)
            ->add('operand', ChoiceType::class, array(
                'choices' => array(
                    '+' => 'add',
                    '-' => 'subtract',
                    '*' => 'multiply',
                    '/' => 'divide'
                )
            ))
            ->add('secondNumber', NumberType::class)
            ->add('Calculate', SubmitType::class);
    }
}
