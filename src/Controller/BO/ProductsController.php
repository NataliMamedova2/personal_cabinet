<?php

namespace App\Controller\BO;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
    /**
     * @Route("/products", name="products_index", methods="GET")
     */
    public function index()
    {
        return $this->render('/products/list.html.twig');
    }
}
