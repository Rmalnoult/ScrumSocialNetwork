<?php

namespace SM\SSNBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostControllerTest extends WebTestCase
{
    public function testPostapost()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/postAPost');
    }

}
