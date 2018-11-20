<?php

namespace App\Controller\FO;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;

class ApiController extends FOSRestController
{
    /**
     * @Rest\View(serializerGroups={"game"}, statusCode=Response::HTTP_OK)
     * @Rest\Get("/api/secure/games")
     *
     * @return JsonResponse
     */
    public function apiGetAllGames()
    {
        return new JsonResponse(['message' => 'The requested resource was apiGetAllGames']);
    }

    /**
     * @Rest\View(serializerGroups={"game"}, statusCode=Response::HTTP_OK)
     * @Rest\Get("/api/secure/games/{id}", requirements={"id" = "\d+"})
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function getGameAction(Request $request)
    {
        return new JsonResponse(['message' => 'The requested resource was getGameAction']);
    }
}
