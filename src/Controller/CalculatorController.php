<?php

namespace App\Controller;

use App\Entity\Calculator;
use App\Form\CalculatorType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class CalculatorController extends AbstractController
{
    // #[Route(path: '/calculator', name: 'calculator', methods: ['GET'])]

    /**
     * @Route("/calculator", name="calculator")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function calculatorAction(Request $request)
    {
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
}