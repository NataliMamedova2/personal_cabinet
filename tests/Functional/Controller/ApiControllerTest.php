<?php

namespace App\Tests\Functional\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class ApiControllerTest extends WebTestCase
{
    /**
     * Create a client with a default Authorization header.
     *
     * @param string $username
     * @param string $password
     *
     * @return \Symfony\Bundle\FrameworkBundle\Client
     */
    protected function createAuthenticatedClient($username = 'front_user', $password = 'frontend_password')
    {
        $client = static::createClient();
        $client->request(
            'POST',
            '/api/login_check',
            [
                'username' => $username,
                'password' => $password,
            ]
        );

        $data = json_decode($client->getResponse()->getContent(), true);

        $client = static::createClient();
        $client->setServerParameter('HTTP_Authorization', sprintf('Bearer %s', $data['token']));

        return $client;
    }

    public function testApiGetAllGames()
    {
        $client = $this->createAuthenticatedClient();
        $client->request('GET', '/api/secure/games');

        $response = $client->getResponse();
        $this->assertEquals(
            Response::HTTP_OK,
            $response->getStatusCode(),
            'The requested ressource was getGameAction'
        );
    }
}
