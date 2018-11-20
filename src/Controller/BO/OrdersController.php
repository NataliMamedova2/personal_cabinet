<?php

namespace App\Controller\BO;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OrdersController extends AbstractController
{
    /**
     * @Route("/orders", name="orders_index", methods="GET")
     */
    public function index()
    {
        return $this->render('/orders/list.html.twig');
    }
}
