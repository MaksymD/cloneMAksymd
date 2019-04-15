<?php


namespace Tests\Functional\ApiBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Tests\Functional\ApiBundle\Controller\KununuWebTestCase;

class IndexControllerTest extends KununuWebTestCase
{
    public function testIndexAction()
    {
        $response = $this->requestGet('');
        $this->assertArrayHasKey('data', $response);
        $this->assertEquals('It works!', $response['data']);
    }
}
