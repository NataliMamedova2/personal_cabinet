<?php

namespace App\Controller\BO;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * @Route("/pages", name="pages_index", methods="GET")
     */
    public function index()
    {
        return $this->render('/pages/list.html.twig');
    }
}
