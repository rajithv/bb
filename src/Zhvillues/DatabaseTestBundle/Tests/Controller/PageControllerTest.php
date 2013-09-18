<?php

namespace Zhvillues\DatabaseTestBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PageControllerTest extends WebTestCase
{
    public function testAbout()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/about');
    }

    public function testJoke()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/joke');
    }

}
