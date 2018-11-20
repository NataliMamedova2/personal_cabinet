<?php

namespace App\Controller\BO;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CustomersController extends AbstractController
{
    /**
     * @Route("/customers", name="customers_index", methods="GET")
     */
    public function index()
    {
        return $this->render('/customers/list.html.twig');
    }
}
