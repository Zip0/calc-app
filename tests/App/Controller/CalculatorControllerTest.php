<?php

namespace Tests\App\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CalculatorControllerTest extends WebTestCase
{
    public function testCalculator()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/calculator');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
