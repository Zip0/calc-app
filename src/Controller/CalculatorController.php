<?php

namespace App\Controller;

use App\Entity\Calculator;
use App\Form\CalculatorType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Psr\Log\LoggerInterface;

class CalculatorController extends AbstractController
{

    /**
     * @Route("/calculator", name="calculator")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function calculatorAction(Request $request, LoggerInterface $logger)
    {
        $logger->info('I just got the logger');

        $calculator = new Calculator();
        $form = $this->createForm(CalculatorType::class, $calculator);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $calculator = $form->getData();

            $result = $calculator->performCalculation();

            return $this->render('calculator/calculator.html.twig', array(
                'form' => $form->createView(),
                'result' => $result
                )
            );
        }
        
        return $this->render('calculator/calculator.html.twig', array('form' => $form->createView()));
    }


    public function loggingTest(LoggerInterface $logger): Response
    {
        $logger->info('I just got the logger');
        $logger->error('An error occurred');
    
        // log messages can also contain placeholders, which are variable names
        // wrapped in braces whose values are passed as the second argument
        $logger->debug('User {userId} has logged in', [
            'userId' => $this->getUserId(),
        ]);
    
        $logger->critical('I left the oven on!', [
            // include extra "context" info in your logs
            'cause' => 'in_hurry',
        ]);
    
        // ...
    }
    

}